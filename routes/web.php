<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// -------------------------------------------------------------


//Three Ways To Send Data:
// [key -> value]
// (->with)
// (compact)
// Route::get('about', function () {
//     // $name = 'khaldon';
//     $name = request('name'); //here you will send the name from url--about?name=khaldon
//     // --return view('about',['name' => $name]);
//     // --return view('about')->with('name',$name);
//     // --return view('about', compact('name'));
//     return view('without-controller.about', compact('name'));
// });


// Route::post('about', function () {
//     $name = 'khaldon';
//     // if (isset($_POST('name')
//     //     $name = $_POST['name']));
//     // return view('about', compact('name'));
//     if (isset($_POST['name']))
//         $name = $_POST['name'];

//     return view('without-controller.about', compact('name'));
// });
// Route::post('about', function () {
//     $name = 'khaldon';
//     if (isset($_GET['name']))
//         $name = $_GET['name'];
//     return view('without-controller.send', compact('name'));
// });

// Route::get('send', function () {
//     $name = 'k';
//     if (isset($_GET['name']))
//         $name = $_GET['name'];
//     // return $name;
//     return view('without-controller.about', compact('name'));
// });

// -------------------------------------------------------------

// Route::get('task', function () {
//     $name = 'Khaldon';
//     $tasks = [
//         'first-task' => 'task1',
//         'second-task' => 'task2',
//         'third-task' => 'task3'
//     ];
//     return view('without-controller.task', compact('tasks', 'name'));
// });
// -------------------------------------------------------------

// Route::get('show/{id}', function ($id) {
//     $tasks = [
//         'first-task' => 'task1',
//         'second-task' => 'task2',
//         'third-task' => 'task3'
//     ];
//     $task = $tasks[$id];
//     return view('without-controller.show', compact('task'));
// });

// -------------------------------------------------------------

// Route of front pages:

// Route::get('/', function () {
//     return view('front.index');
// });

// Route::get('/about', function () {
//     return view('front.about');
// });

// Route::get('/service', function () {
//     return view('front.service');
// });

// -------------------------------------------------------------

// These code are not included in the lectures in college (ptc model)

// Route::get('/about', [TaskController::class, 'show_name']);
// Route::get('/about', [TaskController::class, 'send_name']);
// Route::get('/contact', [TaskController::class, 'index']);

// Route::get('contact/{id}', [TaskController::class, 'show']);


// -------------------------------------------------------------

// Route::get('app', function () {
//     return view('front.tasks');
// });

//these two methods now not necessery any more

// Route::get('tasks', function () {
//     return view('front.tasks');
// });

Route::get('/', [TaskController::class, 'index'])->name('tasks');
Route::post('create', [TaskController::class, 'create'])->name('task.create');
Route::delete('delete/{id}', [TaskController::class, 'destroy'])->name('task.delete');
Route::put('edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::patch('update/{id}', [TaskController::class, 'update'])->name('task.update');
