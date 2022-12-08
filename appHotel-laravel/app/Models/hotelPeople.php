<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
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

class HotelPeople extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	protected $table = 'hotelPeoples';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'hotelRole_id' => 'int',
		'hotelStatusEntity_id' => 'int'
	];

	protected $dates = [
		'birthday',
		'password'
	];

	protected $fillable = [
		'name',
		'firstName',
		'lastName',
		'password',
		'birthday',
		'address',
		'phone',
		'email',
		'hotelRole_id',
		'hotelStatusEntity_id'
	];

    public function setPasswordAttribute(string $password){
        $this->attributes['password'] = bcrypt($password);

    }

	public function hotelRole()
	{
		return $this->belongsTo(HotelRole::class);
	}

	public function hotelStatusEntity()
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
