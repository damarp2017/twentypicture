<?php

namespace App\Http\Controllers;

use App\Models\YoutubeEmbed;
use Illuminate\Http\Request;

class YoutubeEmbedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $youtubes = YoutubeEmbed::latest()->get();
        return view('youtube.youtube', [
            'youtubes' => $youtubes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $youtube = new YoutubeEmbed();

        $youtube->embed_url = $request->embed_url;
        $youtube->save();
        return redirect()->route('youtube')->withSuccess('Youtube embed video created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YoutubeEmbed  $youtubeEmbed
     * @return \Illuminate\Http\Response
     */
    public function show(YoutubeEmbed $youtubeEmbed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YoutubeEmbed  $youtubeEmbed
     * @return \Illuminate\Http\Response
     */
    public function edit(YoutubeEmbed $youtubeEmbed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YoutubeEmbed  $youtubeEmbed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YoutubeEmbed $youtubeEmbed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YoutubeEmbed  $youtubeEmbed
     * @return \Illuminate\Http\Response
     */
    public function destroy(YoutubeEmbed $youtube)
    {
        $youtube->delete();
        return redirect()->route('youtube')->withSuccess('Youtube embed video deleted successfully.');
    }
}
