<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Committee;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $committee = new Committee();
        $committee->name = 'Medarbejderudvalg';
        $committee->contactName = 'Claus Nielsen';
        $committee->contactPhone = '+45 12345678';
        $committee->contactEmail = 'test@example.com';
        $committee->description = 'Det bedste udvalg af dem alle';
        $committee->save();
    }
}
