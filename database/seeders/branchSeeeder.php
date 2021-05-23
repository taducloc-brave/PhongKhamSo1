<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class branchSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branchs')->insert([
            [
                'name'    => 'Quận 1',
                'address' => '113 Võ Thị 6',
            ],
            [
                'name'    => 'Quận Gò Vấp',
                'address' => '113 Lê Lợi',
            ],
        ]);
    }
}
