<?php

use Illuminate\Database\Seeder;

class RootAdminCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => env('ADMIN_NAME', 'root'),
            'user_id' => env('ADMIN_ID', 'root'),
            'mail_address' => env('ADMIN_ADDRESS', 'helloworker@example.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', 'toor')),
            'authority' => true
        ]);
    }
}
