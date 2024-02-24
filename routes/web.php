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

//Route::get('/', function () {
    //return view('welcome');
    //return view('/group/home');
//})->name('home');

//Route::get('/students',[\App\Http\Controllers\StudentController::class,'index']);

// 1 - GET /group - Отображает список всех групп
Route::get('/',[\App\Http\Controllers\GroupController::class,'index'])->name('home');
Route::get('/groups',[\App\Http\Controllers\GroupController::class,'index'])->name('groups.index');

// 2 - GET /group/create - Отображает страницу для создания новой группы
Route::get('/groups/create', [\App\Http\Controllers\GroupController::class,'create'])->name('groups.create');

// 3 - POST /group - Создает новую группу
Route::post('/groups/create/submit', [\App\Http\Controllers\GroupController::class,'add'])->name('groups.submit');

// 4 - GET /groups/{group} - Отображает информацию по выбранной группе и список студентов этой группы
Route::get('/groups/{group}', [\App\Http\Controllers\GroupController::class,'edit'])->name('groups.details');

// 5 - GET /groups/{group}/students/create - Отображает страницу для добавления студента в группу
Route::get('/groups/{group}/students/create', [\App\Http\Controllers\StudentController::class,'create'])->name('students.create');

// 6 - POST /groups/{group}/students - Создаёт студента для группы
Route::post('/groups/{group}/students/create/submit', [\App\Http\Controllers\StudentController::class,'add'])->name('students.submit');

// 7 - GET /groups/{group}/students/{student} - Отображает информацию о студенте
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class,'edit'])->name('students.details');