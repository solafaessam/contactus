<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.contactUs');
});
/*
Route::get('/contact_us', function () {
    $name='ali';

    return view('pages.contactUs', compact('name'));

});

Route::post('/send', function (Request $request) {
     $name= $request-> name;
     return view('pages.contactUs', compact('name'));
});

Route::get('tasks', function (){
    $tasks = [
     '1' =>  'Task 1' ,
     '2' =>  'Task 2' ,
     '3' =>  'Task 3'
    ];
    // dd($tasks[1]);
     return view('Pages.tasks', compact('tasks'));
});

Route::get('task/show/{id}', function ($id){
    $tasks = [
        '1' =>  'Task 1' ,
        '2' =>  'Task 2' ,
        '3' =>  'Task 3'
    ];
    $task = $tasks[$id];
    //dd($task);
    return view('Pages.show', compact('task'));
});*/

Route::get('tasks', function (){
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    return view('pages/tasks', compact('tasks'));

});

Route::get('tasks/show/{id}' , function ($id){
    $task = DB::table('tasks')->find( $id);
    //dd($task);
    return view('pages/show', compact('task'));
});

Route::get('app', function () {
    $tasks = DB::table('tasks')->get();
    return view('pages/todo', compact('tasks'));

});

Route::post('/store', function (Request $request){
    DB::table('tasks')->insert([
        'title' =>$request->title
    ]);
    return redirect()->back();
});

