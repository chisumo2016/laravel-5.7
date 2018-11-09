<?php


use App\Repositories\UserRepository;

Route::get('/', function (UserRepository $users){

   dd($users);

    return view('welcome');
});




Route::resource('/projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');



/*
 *
 * GET    / projects(index)
 * GET  / projects/create (create)
 * GET  / projects/1  (show)
 * POST  /  projects (store)
 * GET /projects/1/edit (edit)
 *
 * PATCH /projects / 1 (update)
 * DELETE /projects /1 (destroy
 *
 *
 * use Illuminate\Filesystem\Filesystem;

Route::get('/', function (){
    dd(app(Filesystem::class));
});
 */


//Route::get('/projects',                 'ProjectsController@index');
//Route::get('/projects/create',          'ProjectsController@create');
//Route::get('/projects/{project)',      'ProjectsController@show');
//Route::post('/projects',                'ProjectsController@store');
//Route::get('/projects/{project}',       'ProjectsController@edit');
//Route::patch('/projects/{project}',     'ProjectsController@update');
//Route::delete('/projects/{project}',    'ProjectsController@delete');
//


//Route::patch('/tasks/{task}', 'ProjectTasksController@update');



/*
 Route::get('/', function (Twitter $twitter){

    dd($twitter);

    return view('welcome');
});

 * app()->singleton('Example', function (){
    dd('sdd');
    return new \App\Example;
});


Route::get('/', function (){

    dd(app('App\example'));

    return view('welcome');
});*/