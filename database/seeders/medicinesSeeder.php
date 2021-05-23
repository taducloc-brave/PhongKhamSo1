<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            [
                'name'     => 'Paracetamol',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Aspirin',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Floctafenin',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Nefopam',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Morphin',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Aminosid',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Thiamphenicol',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Glycopeptid',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Cloramphenicol',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Polypeptid',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'GHV Bone',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Habelric',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Glucosamine Orihiro',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Nano Silymarin OIC',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
            [
                'name'     => 'Detox Green',
                'quantity' => rand(1, 10) * 100,
                'unit'     => 'Viên',
                'price'    => rand(1, 10) * 1000,
            ],
        ]);
    }
}
