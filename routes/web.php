<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// -------------------------------------------------------------


//Three Ways To Send Data:
// [key -> value]
// (->with)
// (compact)
Route::get('about', function () {
    // $name = 'khaldon';
    $name = request('name'); //here you will send the name from url--about?name=khaldon
    // --return view('about',['name' => $name]);
    // --return view('about')->with('name',$name);
    // --return view('about', compact('name'));
    return view('about', compact('name'));
});


Route::post('about', function () {
    $name = 'khaldon';
    // if (isset($_POST('name')
    //     $name = $_POST['name']));
    // return view('about', compact('name'));
    if (isset($_POST['name']))
        $name = $_POST['name'];

    return view('about', compact('name'));
});
// Route::post('about', function () {
//     $name = 'khaldon';
//     if (isset($_GET['name']))
//         $name = $_GET['name'];
//     return view('send', compact('name'));
// });

Route::get('send', function () {
    $name = 'k';
    if (isset($_GET['name']))
        $name = $_GET['name'];
    // return $name;
    return view('about', compact('name'));
});

// -------------------------------------------------------------

Route::get('task', function () {
    $name = 'Khaldon';
    $tasks = [
        'first-task' => 'task1',
        'second-task' => 'task2',
        'third-task' => 'task3'
    ];
    return view('task', compact('tasks', 'name'));
});
// -------------------------------------------------------------

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task' => 'task1',
        'second-task' => 'task2',
        'third-task' => 'task3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});
