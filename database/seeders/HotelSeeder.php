<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0;$i<15;$i++){
            Hotel::create([
                'hotel_name' => $faker->name,
            ]);
        }
    }
}
