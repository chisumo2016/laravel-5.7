<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected  $guarded= [];


    public  function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function addTask($task)
    {
        $this->tasks()->create($task);

    }
}

/*
 2: $this->tasks()->create(['body'=> $body])

 1: return Task::create([
            'project_id' => $this->id,
            'body' => $body
        ]);


public function addTask($body)
    {
        $this->tasks()->create(compact('body'));

    }
 $this->tasks()->create(compact('body'));
 */