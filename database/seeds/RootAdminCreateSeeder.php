<?php

use Illuminate\Database\Seeder;

class RootAdminCreateSeeder extends Seeder {

    public function run() {

        DB::table('times')->truncate();

        DB::table('users')->insert([
            'name' => env('ADMIN_NAME', 'root'),
            'user_id' => env('ADMIN_ID', 'root'),
            'email' => env('ADMIN_ADDRESS', 'helloworker@example.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', 'toor')),
            'authority' => true
        ]);
    }
}
