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
        User::Create([
            'name'=> 'Royal Sigdel',
            'email'=> 'rsigdel@gmail.com',
            'password'=>'password20',
            'remember_token' => '',
        ]);
        $user = factory(User::class)->make([
            'email' => 'rsigdel@gmail.com',
            'password' => 'password20'
        ]);  
    }
}