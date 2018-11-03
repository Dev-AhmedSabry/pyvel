<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => "admin",
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'phone' => '0100000000',
            'password' => bcrypt('pyvel_123456789'),
            'created_at' => \Carbon\Carbon::now(),

        ]);
    }
}
