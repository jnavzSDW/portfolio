<?php

namespace Database\Seeders;

use App\Models\work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work = new work;
        $work['title'] = "SProMAp";
        $work['description'] = "Suvery Project Management Application is a project management application for Surveying Firms.
        The application aims to help surveying firms in managing their projects along with the tasks and documents associated with those projects.
        Users can add their clients, the projects for those clients, and the documents for the projects. certain users can also use the app to schedule task for a specific project and assign employees to work on that task.";
        $work->save();

        $work->technologies()->attach(1);
        $work->technologies()->attach(2);
        $work->technologies()->attach(3);
        $work->technologies()->attach(4);
        $work->technologies()->attach(5);
        $work->technologies()->attach(6);
    }
}
