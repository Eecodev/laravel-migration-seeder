<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->train_company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->bothify('??-##');
            $newTrain->railroad_car_number = $faker->numberBetween(0, 100);
            $newTrain->on_time = $faker->randomElement([true, false]);
            $newTrain->cancelled = $faker->randomElement([true, false]);

            $newTrain->save();


        }
    }
}
