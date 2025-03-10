<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapedData extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'retailer_id',
        'title',
        'description',
        'price',
        'stock_count',
        'images',
        'rating',
        'avg_rating',
    ];
}

