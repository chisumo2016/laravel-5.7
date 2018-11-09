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

//    public  function  update(Task $task)
//    {
//        $method = request()->has('completed') ? 'complete' : 'incomplete';
//
//        $task->$method();
//
//        return back();
//    }
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

/*
 *
 *   /*$task->update([

            'completed' => request()->has('completed')
        ]);*/


/*if (request()->has('complete')){

            $task->complete();
        }else{
            $task->incomplete();
        }*/

//request()->has('complete') ? $task->complete() : $task->incomplete();
//1$task->complete(request()->has('completed'));   // Encapsulation : Hide internal state and values inside the class