<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
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
                'nidn'=>'13579000',
                'nama'=>'Kepala Sekolah',
                'foto'=>"",
                'email'=>'kp@gmail.com',
                'role'=>'kepalasekolah',
                'password'=> bcrypt('12345')
            ],
            [
                'nidn'=>'2468000',
                'nama'=>'Admin',
                'foto'=>"",
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('12345')
            ],
            [
                'nidn'=>'5520100',
                'nama'=>'Raka Ikbar Setyadireza',
                'foto'=>"",
                'email'=>'raka@gmail.com',
                'role'=>'guru',
                'password'=> bcrypt('12345')
            ],
            [
                'nidn'=>'5520101',
                'nama'=>'Fitra Maulana',
                'foto'=>"",
                'email'=>'fifit@gmail.com',
                'role'=>'guru',
                'password'=> bcrypt('12345')
            ],
            [
                'nidn'=>'5520102',
                'nama'=>'Farhan Bintang',
                'foto'=>"",
                'email'=>'farbin@gmail.com',
                'role'=>'guru',
                'password'=> bcrypt('12345')
            ]
        ];
        foreach($userData as $key => $value){
            User::create($value);
         }

         $mapelData = [
            [
                'kode'=>'001',
                'nama'=>'Bahasa Indonesia'
            ],
            [
                'kode'=>'002',
                'nama'=>'Bahasa Inggris'
            ],
            [
                'kode'=>'003',
                'nama'=>'Matematika'
            ],
            [
                'kode'=>'004',
                'nama'=>'TIK'
            ],
            [
                'kode'=>'005',
                'nama'=>'Penjas'
            ],
            [
                'kode'=>'006',
                'nama'=>'Sejarah'
            ]
        ];
        foreach($mapelData as $key => $value){
            Mapel::create($value);
         }

         $kelasData = [
            [
                'kode'=>'100',
                'nama'=>'X - A'
            ],
            [
                'kode'=>'101',
                'nama'=>'X - B'
            ],
            [
                'kode'=>'102',
                'nama'=>'XI - A'
            ],
            [
                'kode'=>'103',
                'nama'=>'XI - B'
            ],
            [
                'kode'=>'104',
                'nama'=>'XII - A'
            ],
            [
                'kode'=>'105',
                'nama'=>'XII - B'
            ]
        ];
        foreach($kelasData as $key => $value){
            Kelas::create($value);
         }
    }
}
