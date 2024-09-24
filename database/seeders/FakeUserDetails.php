<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserDetails;
use Faker\Factory as Faker;

class FakeUserDetails extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $form_data = new UserDetails;
            $form_data->first_name = $faker->name;
            $form_data->last_name = $faker->name;
            $form_data->email = $faker->email;
            $form_data->password = $faker->password;
            $form_data->gender = 'M';
            $form_data->age = $faker->randomNumber(2);
            $form_data->save();
        }
    }
}
