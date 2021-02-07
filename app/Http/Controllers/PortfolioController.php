<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        $categories = Category::latest()->get();
        return view('portfolio.portfolio', [
            'portfolios' => $portfolios,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('portfolio.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'title' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $portfolio = new Portfolio();
        if (App::environment('heroku')) {
            $result = $request->file('image')->storeOnCloudinary('twentypicture/portfolio');
            $path = $result->getSecurePath();
        } else {
            $path = Storage::putFile('public/image/portfolio', $request->file('image'));
        }
        $portfolio->image = $path;
        $portfolio->title = $request->title;
        $portfolio->category_id = $request->category;
        $portfolio->save();

        return redirect()->route('portfolio')->withSuccess("Image: $portfolio->title uploaded successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if (!App::environment('heroku')) {
            if (Storage::exists($portfolio->image)) {
                Storage::delete($portfolio->image);
            }
        }
        $portfolio->delete();
        return redirect()->route('portfolio')->withSuccess("Image: $portfolio->title success deleted");
    }
}
