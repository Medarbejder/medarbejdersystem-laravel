<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
            //$this->middleware('auth');
            return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $dateNow = date("Y-m-d H:i:s");

        $task = Task::create([
            'name' => $request->title,
            'description' => $request->description,
            'start'=> $dateNow,
            'end'=> $dateNow,
            'numberVolunteerNiceToHave' => 1000,
            'numberVolunteerNeedToHave' => 5,
            'description' => 'Vi fjerner alt det skrald folk har efterladt',
            'meetingPoint' => 'DNS',
            'udvalg' => 42,
            'createdBy' => 42,
        ]);



        /*
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
        $task->save(); */

        if ($task) {
            return redirect()->route('tasks.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    public function getTaskTest() {

        return view('test', ['hej'=> Task::all()]);
    }

}
