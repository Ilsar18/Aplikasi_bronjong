<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Page;
use App\Models\Advantage;
use App\Models\Specification;
use App\Models\About;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $image = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $image
        ]);

        return redirect()->route('admin.galleries.index')
            ->with('success','Gambar berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file dengan cara Laravel (lebih aman)
        if ($gallery->image) {
            File::delete(storage_path('app/public/'.$gallery->image));
        }

        $gallery->delete();

        return back()->with('success','Gambar berhasil dihapus');
    }

    public function home()
    {
        $page = Page::where('slug','home')->first();
        $galleries = Gallery::latest()->take(36)->get();
        $advantages = Advantage::take(4)->get();
        $specifications = Specification::latest()->get();
        $about = About::first();

        return view('frontend.galeri', compact(
            'page',
            'galleries',
            'advantages',
            'specifications',
            'about'
        ));
    }
}