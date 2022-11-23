<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelIddtec
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int $hotelEmployee_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelEmployee $hotel_employee
 * @property HotelStatusEntity $hotel_status_entity
 * @property Collection|HotelHotel[] $hotel_hotels
 *
 * @package App\Models
 */
class HotelIddtec extends Model
{
	protected $table = 'hotelIddtecs';

	protected $casts = [
		'hotelEmployee_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'address',
		'phone',
		'email',
		'hotelEmployee_id',
		'hotelStatusEntity_id'
	];

	public function hotel_employee()
	{
		return $this->belongsTo(HotelEmployee::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}

	public function hotel_hotels()
	{
		return $this->hasMany(HotelHotel::class);
	}
}
