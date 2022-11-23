<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelHotel
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int $hotelIddtec_id
 * @property int $hotelEmployee_id
 * @property int $hotelRoom_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelEmployee $hotel_employee
 * @property HotelIddtec $hotel_iddtec
 * @property HotelRoom $hotel_room
 * @property HotelStatusEntity $hotel_status_entity
 *
 * @package App\Models
 */
class HotelHotel extends Model
{
	protected $table = 'hotelHotels';

	protected $casts = [
		'hotelIddtec_id' => 'int',
		'hotelEmployee_id' => 'int',
		'hotelRoom_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'address',
		'phone',
		'email',
		'hotelIddtec_id',
		'hotelEmployee_id',
		'hotelRoom_id',
		'hotelStatusEntity_id'
	];

	public function hotel_employee()
	{
		return $this->belongsTo(HotelEmployee::class);
	}

	public function hotel_iddtec()
	{
		return $this->belongsTo(HotelIddtec::class);
	}

	public function hotel_room()
	{
		return $this->belongsTo(HotelRoom::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}
}
