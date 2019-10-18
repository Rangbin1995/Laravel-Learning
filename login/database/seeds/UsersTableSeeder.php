<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
            'name'    => 'John Wick',
            'email'    => 'john_wick@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  \Str::random(10),
        ]);
    }
}
