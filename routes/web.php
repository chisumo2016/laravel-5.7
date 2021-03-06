<?php



Route::get('/', function (){

    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/projects', 'ProjectsController')->middleware('can:update, project');
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
 *
 *
 *
 *
use App\Services\Twitter;

Route::get('/', function (Twitter $twitter){
    dd($twitter);
    return view('welcome');
});

use App\Repositories\UserRepository;

Route::get('/', function (UserRepository $users){

   dd($users);

    return view('welcome');
});

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
