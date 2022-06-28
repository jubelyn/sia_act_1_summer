<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Jubelyn Baquial',
                'email'=> 'jub@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'Kitty Cute',
                'email'=> 'doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('cute123456')
            ],

            [
                'name'=> 'Sherel Koe',
                'email'=> 'she@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('she123456')
            ],
            [
                'name'=> 'Natasha Grey',
                'email'=> 'gray@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('gray12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
