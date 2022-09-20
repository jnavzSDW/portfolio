<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ex = new Experience;
        $ex['description'] = "SHS work immersion - web developer";
        $ex['logo'] = "unc.png";
        $ex['date'] = "Jan 2018 - Mar 2018";
        $ex->save();

        $ex = new Experience;
        $ex['description'] = "OJT Trainee - AWS online modules";
        $ex['logo'] = "Accenture.png";
        $ex['date'] = "Jan 2022 - Jun 2022";
        $ex->save();
    }
}
