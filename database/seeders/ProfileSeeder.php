<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof = new Profile;
        $prof['name'] = "John Arnulfo Navera";
        $prof['description'] = "I have experience in Web Development specifically working with Laravel and Bootstrap; different programming languages such as C++, Java, and Php as well as implementing relational database with the use of MySQL; conducting research, gathering and analyzing data, and applying IT solutions.";
        $prof->save();
    }
}
