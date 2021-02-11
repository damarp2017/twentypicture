<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\PriceList;
use App\Models\Service;
use App\Models\YoutubeEmbed;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        $services = Service::latest()->get();
        $categories = Category::latest()->get();
        $portfolios = Portfolio::latest()->get();
        $embed_videos = YoutubeEmbed::latest()->get();
        $pricelists = PriceList::latest()->get();
        $contact = Contact::first();
        return view('landing', [
            'banners' => $banners,
            'services' => $services,
            'portfolios' => $portfolios,
            'categories' => $categories,
            'embed_videos' => $embed_videos,
            'pricelists' => $pricelists,
            'contact' => $contact,
        ]);
    }
}
