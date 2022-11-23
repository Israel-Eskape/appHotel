<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*\App\Models\hotelStatusEntity::factory(1)
            ->hasHotelRoomCategorys(1)
            ->hasHotelTypeRooms(1)
            ->hasHotelPolls(1)
            ->hasHotelCheckIns(1)
            ->hasHotelCheckOuts(1)
            ->create();*/
        \App\Models\hotelStatusEntity::factory(2)
        ->hasHotelPolls(3)
        ->hasHotelCheckOuts(3)
        ->create();
#    \App\Models\hotelCheckOut::factory(3)->create();
    }
}
