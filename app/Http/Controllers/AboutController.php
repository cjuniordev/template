<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    public function update(AboutRequest $request)
    {
        $attributes = $request->validated();
        $about = About::first();

        if($request->hasFile('image')) {
            $attributes['image'] = $request->image->store('about', 'public');

            if($about->image) {
                Storage::delete($about->image);
            }
        }

        $about->update($attributes);

        return redirect()->route('about.index')->with('success', 'Informações atualizadas com sucesso!');
    }
}
