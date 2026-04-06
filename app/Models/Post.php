<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;

    protected $table = "posts";

    protected $guarded = [""];

    protected $keyType = "string";

    public $incrementing = false;

    public $primaryKey = "id";

    public function category()
    {
        return $this->belongsTo(PostCategory::class, "id", "post_id");
    }

    public function tags()
    {
        return $this->hasMany(PostTag::class, "post_id", "id");
    }

    public function postCategories()
    {
        return $this->hasMany(PostCategory::class, "post_id", "id");
    }
}
