<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [];

    public function countBlog()
    {
        $this->hasMany(Blog::class, 'category_id', 'id')->count();
    }
}
