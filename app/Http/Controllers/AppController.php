<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AppController extends Controller
{
    public function index()
    {
        $data["blog"] = Post::where("is_active", "1")
            ->orderBy("published_at", "DESC")
            ->limit(6)
            ->get();

        return view("landing-page.master", $data);
    }

    public function dashboard()
    {
        return view("modules.dashboard");
    }

    public function show($slug)
    {
        $blog = Post::with([
            'category.category',
            'tags',
            'postCategories'
        ])->where('slug', $slug)->firstOrFail();

        $tagIds = $blog->tags->pluck('id');

        $related = Post::with('tags')
            ->where('id', '!=', $blog->id)
            ->whereHas('tags', function ($q) use ($tagIds) {
                $q->whereIn('id', $tagIds);
            })
            ->latest()
            ->take(3)
            ->get();

        if ($related->count() < 3) {
            $categoryIds = $blog->postCategories->pluck('category_id');

            $fallback = Post::with('tags')
                ->where('id', '!=', $blog->id)
                ->whereHas('postCategories', function ($q) use ($categoryIds) {
                    $q->whereIn('category_id', $categoryIds);
                })
                ->latest()
                ->take(3 - $related->count())
                ->get();

            $related = $related->merge($fallback);
        }

        return view("landing-page.detail-blog", compact('blog', 'related'));
    }
}
