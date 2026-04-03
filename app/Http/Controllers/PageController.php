<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::firstOrCreate(
            ['slug' => 'home'],
            ['title' => 'Bronjong Berkah Mandiri']
        );

        return view('admin.pages.home', compact('page'));
    }
    

    public function update(Request $request, $id)
    {
    $page = Page::findOrFail($id);

    if($request->hasFile('image')){
        $image = $request->file('image')->store('pages','public');
        $page->image = $image;
    }

    $page->title = $request->title;
    $page->content = $request->content;

    $page->save();

    return back()->with('success','Data berhasil diupdate');
    }
}