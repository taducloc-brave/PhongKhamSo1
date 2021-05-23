<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalMedicalRecord extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_medical_records')->insert([
            'symptom'    => 'ho lâu ngày',
            'branch'     => 'Quận 1',
            'specialist' => 'Mắt',
            'Diagnose'   => 'Bệnh lâu ngày',
            'support'    => null,
            'status'     => null,
            'note'       => 'ăn ngủ đầy đủ',
            'file'       => null,
            'dateBook'   => '2021-05-21',
            'timeBook'   => '8am - 9am',
            'doctor_id'  => '1',
            'nameDoctor'  => 'ta duc loc',
            'created_by' => User::query()->inRandomOrder()->first()->id,
        ]);
    }
}
