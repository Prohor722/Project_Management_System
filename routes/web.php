<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Common Routes
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login.index');
Route::post('/login', 'App\Http\Controllers\LoginController@verify')->name('login.verify');
Route::get('/logout', 'App\Http\Controllers\LogoutController@index')->name('logout.index');


//Admin Routes
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
Route::view('/admin/students', 'admin.studentList')->name('admin-students');
Route::view('/admin/teachers', 'admin.teachers')->name('admin-teachers');
Route::view('/admin/addTeacher', 'admin.addTeacher')->name('add-teacher');
Route::view('/admin/addStudent', 'admin.addStudent')->name('add-student');
Route::view('/admin/marks', 'admin.marks')->name('admin-marks');

//Teacher Routes
Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher.index');
Route::view('/teacher/studentList', 'teacher.studentList')->name('teacher-student-list');
Route::view('/teacher/groups', 'teacher.groups')->name('teacher-groups');
Route::view('/teacher/tasks', 'teacher.tasks')->name('teacher-tasks');

//Student Routes
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student.index');
Route::view('/student/notice', 'student.notice')->name('student-notice');
Route::view('/student/tasks', 'student.notice')->name('student-tasks');


