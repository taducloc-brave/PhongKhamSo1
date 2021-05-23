<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(adminSeeder::class);
        $this->call(doctorSeeder::class);
        $this->call(userSeeder::class);
        $this->call(PersonalMedicalRecord::class);
        $this->call(branchSeeeder::class);
        $this->call(SpecialistSeeder::class);
        //$this->call(medicine_in_records::class);
        $this->call(medicinesSeeder::class);


    }
}
