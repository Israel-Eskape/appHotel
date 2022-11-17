<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelCost extends Model
{
    use HasFactory;
    protected $table = "hotelCosts";
    protected $fillable = [
        'price',
        'iva',
        'discount',
        'hotelStatusEntity_id'
    ];
}
