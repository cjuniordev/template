<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BannerController extends Controller
{
    public function index(): View
    {
        $banner = Banner::first();

        return view('admin.banner.index', compact('banner'));
    }

    public function show($id)
    {
    }

    public function update(BannerRequest $request)
    {
        $attributes = $request->validated();

        $banner = Banner::first();
        $banner->update($attributes);

        return redirect()->back()->with('success', 'Banner atualizado.');
    }
}
