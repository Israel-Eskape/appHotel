<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelEmployee
 * 
 * @property int $id
 * @property string $rfc
 * @property string $password
 * @property int $hotelPeople_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelPeople $hotel_people
 * @property HotelStatusEntity $hotel_status_entity
 * @property Collection|HotelHotel[] $hotel_hotels
 * @property Collection|HotelIddtec[] $hotel_iddtecs
 *
 * @package App\Models
 */
class HotelEmployee extends Model
{
	protected $table = 'hotelEmployees';

	protected $casts = [
		'hotelPeople_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $hidden = [
		
	];

	protected $fillable = [
		'rfc',
		'hotelPeople_id',
		'hotelStatusEntity_id'
	];

	public function hotel_people()
	{
		return $this->belongsTo(HotelPeople::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}

	public function hotel_hotels()
	{
		return $this->hasMany(HotelHotel::class);
	}

	public function hotel_iddtecs()
	{
		return $this->hasMany(HotelIddtec::class);
	}
}
