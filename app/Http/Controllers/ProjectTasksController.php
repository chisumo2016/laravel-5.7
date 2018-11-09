<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {

        $attributes = request()->validate(['body' => 'required']);

        $project->addTask($attributes);

        return back();
    }

    public  function  update(Task $task)
    {
        $task->update([

            'completed' => request()->has('completed')
        ]);

        return back();
    }
}

/*
     Task::create([
    'project_id' => $project->id,
    'body' => request('body')
       ]);

2:
    request()->validate(['body' => 'required']);

   $project->addTask(request('body'));
 */