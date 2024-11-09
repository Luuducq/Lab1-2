<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'author',
        'publisher',
        'publication',
        'price',
        'quantity',
        'category_id',
    ];

    // Định nghĩa quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}