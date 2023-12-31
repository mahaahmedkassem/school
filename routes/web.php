<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\TecherController;

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

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('original',[KidController::class, 'original']);

Route::get('kider',[KidController::class, 'index'])->name('index');

Route::get('page',[KidController::class, 'create']);

Route::get('about',[KidController::class, 'about'])->name('about');

Route::get('classes',[KidController::class, 'classes'])->name('classes');

Route::get('contact',[KidController::class, 'contact'])->name('contact');

Route::get('testimonial',[KidController::class, 'testimonial'])->name('testimonial');

Route::get('facilities',[KidController::class, 'facilities'])->name('facilities');

Route::get('team',[KidController::class, 'team'])->name('team');


Route::get('action',[KidController::class, 'action'])->name('action');

Route::get('appointment',[KidController::class, 'appointment'])->name('appointment');

Route::fallback([KidController::class, 'error404']);

Route::get('techerlist',[TecherController::class, 'index'])->middleware('verified');

Route::get('addtecher',[TecherController ::class, 'create']);// يعرض ألنموذج

Route::post('techers',[TecherController ::class, 'store'])->name('techers');

Route::get('edittecher/{id}',[TecherController::class, 'edit']);

//اسم url نفس الاسم الي كتبناه في الايديت في البلاد
Route::put('updatetecher/{id}',[TecherController ::class, 'update'])->name('updatetecher');