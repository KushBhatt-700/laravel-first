<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EnquireFormModel;
use Faker\Factory as Faker;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $form_data = new EnquireFormModel;
            $form_data->name = $faker->name;
            $form_data->email = $faker->email;
            $form_data->password = $faker->password;
            $form_data->address = $faker->address;
            $form_data->address2 = $faker->address;
            $form_data->city = $faker->city;
            $form_data->state = $faker->state;
            $form_data->zip = 12345;
            $form_data->privacy = 1;
            $form_data->save();
        }
    }
}
