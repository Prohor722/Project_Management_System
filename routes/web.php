<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('home');
// });

//Common Routes
Route::get('/', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'verify'])->name('login.verify');
Route::get('/logout', [LogoutController::class,'index'])->name('logout.index');


//Admin Routes
Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
Route::view('/admin/students', 'admin.studentList')->name('admin-students');
Route::view('/admin/teachers', 'admin.teachers')->name('admin-teachers');
Route::view('/admin/addTeacher', 'admin.addTeacher')->name('add-teacher');
Route::view('/admin/addStudent', 'admin.addStudent')->name('add-student');
Route::view('/admin/marks', 'admin.marks')->name('admin-marks');

//Teacher Routes/////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher.index');
Route::view('/teacher/studentList', 'teacher.studentList')->name('teacher-student-list');

//groups
Route::resource('/teacher/groups', GroupController::class);
//Topic
Route::resource('/teacher/topic', TopicController::class);
//Notice
Route::resource('/teacher/notice', NoticeController::class);
//tasks
Route::resource('/teacher/tasks', TaskController::class);


//Student Routes
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student.index');
Route::view('/student/notice', 'student.notice')->name('student-notice');
Route::view('/student/tasks', 'student.notice')->name('student-tasks');


