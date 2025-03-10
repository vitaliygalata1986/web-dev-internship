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
        'images'
    ];

    public function retailers()
    {
        return $this->belongsToMany(Retailer::class);
    }

    public $timestamps = false;

    protected $casts = [
        'images' => 'array',
    ];
}

