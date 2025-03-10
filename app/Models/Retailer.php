<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    protected $table = 'retailers';

    protected $fillable = [
        'title',
        'url',
        'currency',
        'logo',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public $timestamps = false;
}
