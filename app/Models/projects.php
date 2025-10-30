<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'client',
        'service',
        'keywords',
        'description',
        'status',
        'slug',
        'image_1',
        'image_2',
        'date',
    ];
    protected $casts = [
        'date' => 'date',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
