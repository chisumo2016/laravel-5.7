<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public  function __construct()
    {
        $this->middleware('auth');
    }

    public  function  index()

    {

        $projects =  Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }


    public  function  create()
    {
        return view('projects.create');
    }

    public  function  show(Project $project)  // model binding  Project $project
    {

        $this->authorize('view', $project);

        return view('projects.show', compact('project'));
    }

    public  function  edit(Project $project) // example.com/projects/1/edit
    {

         //$project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public  function  store()
    {
        //$this->authorize('update', $project);

        $attributes = request()->validate([
            'title'=> ['required', 'min:3' ],
            'description'=> ['required', 'min:3' ],
        ]);

        $attributes['owner_id'] = auth()->id();
        Project::create($attributes); // append to array

        //Project::create($attributes + ['owner_id' => auth()->id()]); // append to array


        return  redirect('/projects');



        /*
          Project::create(request()->validate([
            'title'=> ['required', 'min:3' ],
            'description'=> ['required', 'min:3' ],
        ]));


         * */
        /*$attributes = request()->validate([
            'title'=> ['required', 'min:3' ],
            'description'=> ['required', 'min:3' ],
        ]);*


        Project::create($attributes);



        /*Project::create(request([
            'title',
            'description'
        ]));*/


        /*dd(request(['title', 'description']));
        dd(request()->all());

        Project::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);
        */



        /*$project = new Project();

        $project->title         = request('title');
        $project->description   = request('description');

        $project->save();*/



    }


    public  function  update( Project $project)
    {
        $this->authorize('update', $project);
          // Recommendes
         $project->update(request(['title', 'description']));


        //$project = Project::findOrFail($id);

        /*$project->title         = request('title');
        $project->description   = request('description');

        $project->save();*/

        return redirect('/projects');
    }


    public function  destroy(Project $project)
    {
        $this->authorize('update', $project);

        $project->delete();
        $project->save();

        return redirect('/projects');

        
        //Project::find($id)->delete();//$project = Project::findOrFail($id);



    }

}


/*
//     show
        return $project;

        //$project = Project::findOrFail($id);
        //return $project;

    //$projects =  Project::all();th
        //auth()->id()  //4
        //auth()->user() //user
        //auth()->check()  //Boolean
        //auth()->guest()

$this->middleware('auth')->only('store', 'update');
$this->middleware('auth')->except('show');

 */