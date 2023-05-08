<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Italo', 'Trenitalia', 'Trenord']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = '0001-01-01 00:00:00';
            while ($newTrain->departure_time > $newTrain->arrival_time) {
                $newTrain->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            }
            $newTrain->train_id = $faker->numberBetween(100000, 999999);
            $newTrain->n_carriages = $faker->numberBetween(1, 18);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            if ($newTrain->cancelled) {                 //Il treno non è in orario se cancellato
                $newTrain->in_time = 0;
            } else {
                $newTrain->in_time = $faker->numberBetween(0, 1);
            }
            $newTrain->save();
        }
    }
}
