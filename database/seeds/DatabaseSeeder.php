<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = \Faker\Factory::create();
//
//        $user = new \App\User();
//        $user->user_id = $faker->unique()->userName;
//        $user->password = bcrypt('password');
//        $user->user_name = $faker->name($gender = null);
//        $user->authority = false;
//        $user->save();
//
//        $post = new \App\Post();
//        $post->user_id = $faker->unique()->userName;
//        $post->in = $faker->dateTime($max = 'now', $timezone = date_default_timezone_get());
//        $post->out = $faker->dateTime($max = 'now', $timezone = date_default_timezone_get());
//        $post->save();

        $this->call(RootAdminCreateSeeder::class);
    }
}
