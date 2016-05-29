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
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++){
            \App\Article::create([
                'title' => $faker->sentence(rand(3, 7)),
                'short_description' => $faker->sentence(rand(10, 30)),
                'content' => $faker->sentence(rand(100, 530)),
                'user_id' => 1
            ]);
        }

        /*DB::table('images')->truncate();


        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++){
        	DB::table('images')->insert([
        		'user_name' => $faker->name,
        		'address' => $faker->address,
        		'path' => $faker->imageUrl(200, 200),
        		'phone' => $faker->phoneNumber
        	]);
        }*/
    }
}
