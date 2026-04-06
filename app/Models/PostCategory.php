<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasUuids;

    protected $table = "post_category";

    protected $guarded = [""];

    protected $keyType = "string";

    public $incrementing = false;

    public $primaryKey = "id";

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
