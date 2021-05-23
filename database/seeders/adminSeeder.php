<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name'=>'ta duc loc',
        	'email'=>'taducloc0603@gmail.com',
        	'password'=>bcrypt('taducloc'),
        ]);
    }
}
