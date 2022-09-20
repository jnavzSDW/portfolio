<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ed = new Education;
        $ed['school'] = "University of Nueva Caceres";
        $ed['logo'] = "unc.png";
        $ed['date'] = "Jun 2022";
        $ed->save();
    }
}
