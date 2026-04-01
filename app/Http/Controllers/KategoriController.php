<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $data["kategori"] = Category::get();

        return view("modules.kategori.index", $data);
    }

    public function store(Request $request)
    {
        Category::create([
            "name" => $request->nama,
            "slug" => Str::slug($request->nama)
        ]);

        return back()->with("success", "Data Berhasil di Tambahkan");
    }

    public function edit($id)
    {
        $data["edit"] = Category::where("id", $id)->first();

        return view("modules.kategori.edit", $data);
    }

    public function update(Request $request, $id)
    {
        Category::where("id", $id)->update([
            "name" => $request->nama,
            "slug" => Str::slug($request->nama)
        ]);

        return back()->with("success", "Data Berhasil di Simpan");
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return back()->with("success", "Data Berhasil di Hapus");
    }
}
