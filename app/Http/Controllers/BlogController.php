<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data["blog"] = Post::get();

        return view("modules.blog.index", $data);
    }

    public function create()
    {
        $data["kategori"] = Category::get();
        $data["tag"] = Tag::get();

        return view("modules.blog.create", $data);
    }

    public function store(Request $request)
    {
        $fileName = ImageHelper::uploadBase64ToS3($request->gambar);

        $blog = Post::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "content" => $request->content,
            "user_id" => 1,
            "gambar" => $fileName,
            "published_at" => now()
        ]);

        PostCategory::create([
            "post_id" => $blog["id"],
            "category_id" => $request->category_id
        ]);

        foreach ($request->tags as $tag) {
            PostTag::create([
                "post_id" => $blog["id"],
                "tag_id" => $tag
            ]);
        }

        return back()->with("success", "Data Berhasil di Tambahkan");
    }
}
