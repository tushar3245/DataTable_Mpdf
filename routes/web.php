<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/add_new_details', [TaskController::class, 'AddNew']);
Route::post('/add_details_store', [TaskController::class, 'AddTaskStore']);
Route::get('/task_list', [TaskController::class,'TaskList']);
Route::get('/task/delete/{id}', [TaskController::class,'Delete']);
Route::get('/task/edit/{id}', [TaskController::class,'Edit']);
Route::post('/edit_task_store/{id}', [TaskController::class,'EditTaskStore']);
Route::get('/change/status/{id}', [TaskController::class,'ChangeStatus']);
Route::get('/lefJoin', [TaskController::class,'lefJoin']);

//ajax
Route::get('/ajax_work', [AjaxController::class,'index']);
Route::post('/upload', [AjaxController::class,'upload'])->name('upload');

//new
Route::get('/user_list', [UserController::class,'UserList']);

//PDF

Route::get('/pdf.generate/{id}', [PdfController::class, 'generatePdf']);