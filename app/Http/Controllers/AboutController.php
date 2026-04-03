<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        if (!$about) {
            $about = About::create();
        }

        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::first();

        // Upload gambar
        if ($request->hasFile('image1')) {
            $about->image1 = $request->file('image1')->store('about','public');
        }

        if ($request->hasFile('image2')) {
            $about->image2 = $request->file('image2')->store('about','public');
        }

        if ($request->hasFile('image3')) {
            $about->image3 = $request->file('image3')->store('about','public');
        }

        $about->content = $request->content;
        $about->save();

        return back()->with('success','Tentang kami berhasil diupdate');
    }
}