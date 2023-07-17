<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Service;

class SiteController extends Controller
{
    public function __invoke()
    {
        $about = About::first();
        $banner = Banner::first();
        $services = Service::all();

        return view('site.home', compact('banner', 'about', 'services'));
    }
}
