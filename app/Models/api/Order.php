<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['pemesan','Nama_manu', 'status', 'jumlah' ];
}
