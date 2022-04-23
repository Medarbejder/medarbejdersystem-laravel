<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
   */
public function run() {
    $dateNow = date("Y-m-d H:i:s");
    $task = new Task();
    $task->name = 'Oprydning';
    $task->start = $dateNow;
    $task->end = $dateNow;
    $task->numberVolunteerNiceToHave = 1000;
    $task->numberVolunteerNeedToHave = 5;
    $task->description = 'Vi fjerner alt det skrald folk har efterladt';
    $task->meetingPoint = 'DNS';
    $task->udvalg = 42;
    $task->createdBy = 42;
    $task->save();
}



}
