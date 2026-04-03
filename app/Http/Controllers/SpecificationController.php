<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function index()
    {
        $specifications = Specification::latest()->get();
        return view('admin.specifications.index', compact('specifications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $image = $request->file('image')->store('specifications', 'public');

        Specification::create([
            'image' => $image
        ]);

        return back()->with('success', 'Gambar berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $spec = Specification::findOrFail($id);

        if ($spec->image && file_exists(storage_path('app/public/'.$spec->image))) {
            unlink(storage_path('app/public/'.$spec->image));
        }

        $spec->delete();

        return back()->with('success','Gambar berhasil dihapus');
    }

}