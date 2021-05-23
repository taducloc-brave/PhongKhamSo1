<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialists')->insert([
                'name'=>'Mắt',
                'TK'=>'Tạ Đức Lộc',
                'status'=>'Hoạt động',
                'demo'=>'Điệu trị các bệnh liên quan tới mắt'
        ]);
    }
}
