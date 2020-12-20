<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rohit',
            'email' => 'rohit@gmail.com',
            'password' => bcrypt('secret'),
            'address'=> 'Kathmandu',
            'is_admin'=> true,
            'mobile' => '9808079112'
        ]);
        
    }
}
