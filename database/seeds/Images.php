<?php

use Illuminate\Database\Seeder;

class Images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();


        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++){
        	DB::table('images')->insert([
        		'user_name' => $faker->name,
        		'address' => $faker->address,
        		'path' => $faker->imageUrl(200, 200),
        		'phone' => $faker->phoneNumber
        	]);
        }
    }
}
