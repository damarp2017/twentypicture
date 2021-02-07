<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricelists = PriceList::latest()->get();
        return view('pricelist.pricelist', [
            'pricelists' => $pricelists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pricelist.create');
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
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pricelist = new PriceList();
        $path = Storage::putFile('public/image/pricelist', $request->file('image'));
        $pricelist->image = $path;
        $pricelist->title = $request->title;
        $pricelist->save();

        return redirect()->route('pricelist')->withSuccess("Image: $pricelist->name uploaded successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PriceList  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function show(PriceList $pricelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PriceList  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function edit(PriceList $pricelist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PriceList  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceList $pricelist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PriceList  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceList $pricelist)
    {
        if (Storage::exists($pricelist->image)) {
            Storage::delete($pricelist->image);
        }
        $pricelist->delete();
        return redirect()->route('pricelist')->withSuccess("Image: $pricelist->title deleted successfully.");
    }
}
