<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelRoomCategory extends Model
{
    use HasFactory;
    protected $table ="hotelRoomCategorys";
    protected $fillable = [
        "name",
        "description"
    ];
    public function hotelStatusEntity(){
        return $this->hasMany(hotelStatusEntitys::class);
    }
}
