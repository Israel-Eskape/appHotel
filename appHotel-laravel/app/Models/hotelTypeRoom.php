<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelTypeRoom extends Model
{
    use HasFactory;
    protected $table = "hotelTypeRooms";
    
    protected $fillable = [
        'name',
        'description',
        'hotelStatusEntity_id'
    ];
    public function hotelStatusEntity(){
        return $this->belongsTo(hotelStatusEntity::class);
    }
}
