<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdvantageController extends Controller
{
    public function index()
    {
        $advantages = Advantage::take(4)->get();

        // Pastikan selalu 4 form
        for ($i = $advantages->count(); $i <4; $i++) {
            $advantages->push(new Advantage());
        }

        return view('admin.advantages.index', compact('advantages'));
    }

    public function update(Request $request)
    {
        foreach ($request->advantages as $data) {

            $advantage = isset($data['id'])
                ? Advantage::find($data['id'])
                : new Advantage();

            if (!$advantage) {
                $advantage = new Advantage();
            }

            if (isset($data['icon'])) {
                $path = $data['icon']->store('advantages','public');
                $advantage->icon = $path;
            }

            $advantage->title = $data['title'];
            $advantage->content = $data['content'];
            $advantage->save();
        }

            return back()->with('success','Keunggulan berhasil diupdate');
        }
}