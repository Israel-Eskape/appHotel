<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelPoll extends Model
{
    use HasFactory;
    protected $table = "hotelPolls";
    protected $fillable = [
        'comments',
        "satisfaction",
        "hotelStatusEntity_id"

    ];
    public function hotelStatusEntity(){
        return $this->belongsTo(hotelStatusEntity::class);
    }
}
