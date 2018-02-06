<?php

use Illuminate\Database\Seeder;

class CreateWorkTimeSeeder extends Seeder {

    public function run() {

        DB::table('times')->truncate();

        $faker = Faker\Factory::create('ja_JP');

        for($i = 0; $i < 10; $i++) {
            App\Time::create([
                'user_id' => $faker->userName(),
                'date' => $faker->dateTime($max = 'now', $timeZone = null),
                'hour' => $faker->numberBetween(0, 23),
                'minute' => $faker->numberBetween(0, 59),
                'fee' => $faker->numberBetween(0, 500),
                'form' => $faker->randomElement($array = [
                    'remote',
                    'office'
                ])
            ]);
        }
    }
}
