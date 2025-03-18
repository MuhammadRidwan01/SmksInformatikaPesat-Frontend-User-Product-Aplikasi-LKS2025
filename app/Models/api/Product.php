<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama', 'gambar', 'harga'];
}
