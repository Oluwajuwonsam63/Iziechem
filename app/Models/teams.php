<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class teams extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'role',
        'image',
        'phone',
        'email',
        'bio',
        'sign',
        'location',
        'facebook',
        'instagram',
        'youtube',
        'linkedIn',
        'x',
        'tiktok',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
