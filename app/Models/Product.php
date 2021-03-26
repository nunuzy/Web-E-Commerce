<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'photo_path',
        'title',
        'description',
        'produk_kategori',
        'harga_1',
        'harga_2',
        'harga_3',
        'harga_4'
    ];

}
