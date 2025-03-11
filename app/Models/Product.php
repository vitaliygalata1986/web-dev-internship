<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'description',
        'manufacturer_part_number',
        'pack_size',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function scrapedData()
    {
        return $this->hasMany(ScrapedData::class);
    }
}

