<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Categories extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'user_id',
    //     'name',
    //     'keywords',
    //     'meta_desc',
    //     'image',
    //     'description',
    //     'status',
    //     'slug',
    // ];

    public function user()
   {
    return $this->belongsTo(user::class);
   }

    public function posts()
    {
        return $this->hasMany(app\modes\posts::class);
    }
}
