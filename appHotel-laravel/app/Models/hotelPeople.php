<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelPeople
 * 
 * @property int $id
 * @property string $name
 * @property string $firstName
 * @property string $lastName
 * @property Carbon $birthday
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int $hotelRole_id
 * @property int $hotelStatusEntity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property HotelRole $hotel_role
 * @property HotelStatusEntity $hotel_status_entity
 * @property Collection|HotelCustomer[] $hotel_customers
 * @property Collection|HotelEmployee[] $hotel_employees
 * @property Collection|IddtecEmployee[] $iddtec_employees
 *
 * @package App\Models
 */
class HotelPeople extends Model
{
	protected $table = 'hotelPeoples';

	protected $casts = [
		'hotelRole_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $dates = [
		'birthday'
	];

	protected $fillable = [
		'name',
		'firstName',
		'lastName',
		'birthday',
		'address',
		'phone',
		'email',
		'hotelRole_id',
		'hotelStatusEntity_id'
	];

	public function hotel_role()
	{
		return $this->belongsTo(HotelRole::class);
	}

	public function hotel_status_entity()
	{
		return $this->belongsTo(HotelStatusEntity::class);
	}

	public function hotel_customers()
	{
		return $this->hasMany(HotelCustomer::class);
	}

	public function hotel_employees()
	{
		return $this->hasMany(HotelEmployee::class);
	}

	public function iddtec_employees()
	{
		return $this->hasMany(IddtecEmployee::class);
	}
}
