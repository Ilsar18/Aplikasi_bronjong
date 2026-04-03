<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Advantage;
use App\Models\Specification;
use App\Models\About;

class FrontendController extends Controller
{
    public function home()
    {
        $page = Page::where('slug','home')->first();
        $galleries = Gallery::latest()->take(36)->get();
        $advantages = Advantage::take(4)->get();
        $specifications = Specification::latest()->get();
        $about = About::first();

        return view('frontend.home', compact(
            'page',
            'galleries',
            'advantages',
            'specifications',
            'about'
        ));
    }

    public function profil()
    {
        $page = Page::where('slug','home')->first();
        $about = About::latest()->get();
        return view('frontend.profil', compact('page','about'));
    }

    public function produk()
    {
        $page = Page::where('slug','home')->first();
        $products = Product::latest()->get();
        $specifications = Specification::latest()->get();

        return view('frontend.produk', compact('page','products','specifications'));
    }

    public function galeri()
    {
        $page = Page::where('slug','home')->first();
        $galleries = Gallery::latest()->get();

        return view('frontend.galeri', compact('page','galleries'));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('frontend.contact', compact('contact'));
    }
}