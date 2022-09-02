<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory ,SoftDeletes;
    protected $guarded = [];

    public function categories()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
