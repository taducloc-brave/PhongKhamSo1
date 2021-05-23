<?php

namespace Database\Seeders;

use App\Models\Users\PersonalMedicalRecord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicine_in_records extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_in_records')->insert([
            'name' => '$this->faker',
            'DVT'  => 'Hộp',
            'sl'   => '9999',
            'record_id'=> PersonalMedicalRecord::query()->inRandomOrder()->first()->id,
        ]);
    }
}
