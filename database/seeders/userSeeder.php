<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'    => 'Tạ Đức Lộc',
            'email'     => 'taducloc060301@gmail.com',
            'email_verified_at' => null,
            'password'   => bcrypt('12345678'),
            'gender'    => '1',
            'phone'     => '0968870604',
        ]);
    }
}
