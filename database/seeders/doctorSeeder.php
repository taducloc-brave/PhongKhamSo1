<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            [
                'name'          => 'Tạ Đức Lộc',
                'email'         => 'taducloc060301@gmail.com',
                'password'      => 'taducloc',/*bcrypt('taducloc'),*/
                'gender'        => '1',
                'specialist'    => 'Mắt',
                'branch'        => 'Quận 1',
                'phone'         => '0968870604',
                'date_of_birth' => '1999/03/29',
                'role'          => 'Trưởng khoa',
                'image'         => 'bacsi1.jpg',
            ],
            [
                'name'          => 'Huỳnh Long Diệm',
                'email'         => 'longdiem060301@gmail.com',
                'password'      => 'taducloc',/*bcrypt('taducloc'),*/
                'gender'        => '1',
                'specialist'    => 'Mắt',
                'branch'        => 'Quận 1',
                'phone'         => '0968870604',
                'date_of_birth' => '1999/03/29',
                'role'          => 'Phó khoa',
                'image'         => 'bacsi1.jpg',
            ],
        ]);
    }
}
