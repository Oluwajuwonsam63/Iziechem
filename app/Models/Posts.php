<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'category_id',
    //     'user_id',
    //     'title',
    //     'keywords',
    //     'meta_desc',
    //     'image',
    //     'description',
    //     'status',
    //     'slug',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

}
