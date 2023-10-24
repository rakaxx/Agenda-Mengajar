<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData = [
            [
                'nidn'=>'admin',
                'nama'=>'Admin Default',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('12345')
            ]
        ];
        foreach($userData as $key => $value){
            User::create($value);
        }
    }
}
