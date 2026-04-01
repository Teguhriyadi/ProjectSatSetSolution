<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        $data["tag"] = Tag::get();

        return view("modules.tag.index", $data);
    }

    public function store(Request $request)
    {
        Tag::create([
            "name" => $request->nama,
            "slug" => Str::slug($request->nama)
        ]);

        return back()->with("success", "Data Berhasil di Tambahkan");
    }

    public function edit($id)
    {
        $data["edit"] = Tag::where("id", $id)->first();

        return view("modules.tag.edit", $data);
    }

    public function update(Request $request, $id)
    {
        Tag::where("id", $id)->update([
            "name" => $request->nama,
            "slug" => Str::slug($request->nama)
        ]);

        return back()->with("success", "Data Berhasil di Simpan");
    }

    public function destroy($id)
    {
        Tag::destroy($id);

        return back()->with("success", "Data Berhasil di Hapus");
    }
}
