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
            'name' => 'hoge',
            'user_id' => '',
            'mail_address' => '',
            'password' => '',
            'authority' => true
        ]);
    }
}
