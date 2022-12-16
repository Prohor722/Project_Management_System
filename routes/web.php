<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GroupStudentController;
use App\Http\Controllers\StudentMarkController;
use App\Http\Controllers\MarksController;

//Common Routes
Route::get('/', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'verify'])->name('login.verify');
Route::get('/logout', [LoginController::class,'logout'])->name('logout.index');
Route::get('/admin/create', [LoginController::class,'admin']);


//----------------------Admin Routes---------------------------//

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/profile', [AdminController::class, 'show']);
    Route::put('/admin/profile/update', [AdminController::class, 'update']);

    //students
    Route::resource('/admin/student', StudentController::class);
    Route::get('/admin/student/info/{student_id}', [StudentController::class, 'studentInfo']);
    Route::post('/admin/student/search', [StudentController::class, 'search']);

    //teachers
    Route::resource('/admin/teacher', TeacherController::class);
    Route::get('/admin/teacher/info/{t_id}',[ TeacherController::class, 'teacherInfo']);
    Route::post('/admin/teacher/search', [TeacherController::class, 'search']);

    //marks
    Route::get('/admin/marks', [MarksController::class, 'index'])->name('admin-marks');
    Route::put('/admin/marks/{id}', [MarksController::class, 'update']);
});


//----------------------Teacher Routes-----------------------------//

Route::middleware(['teacher'])->group(function () {

    Route::get('/teacher', function(){
        return view('teacher.index');
    })->name('teacher.index');

    //teacher profile
    Route::get('/teacher/profile', [TeacherController::class, 'showProfile']);
    Route::put('/teacher/profile/update', [TeacherController::class, 'updateProfile']);
    // Route::view('/teacher/studentList', 'teacher.studentList')->name('teacher-student-list');

    //groups
    Route::resource('/teacher/groups', GroupController::class);

    //manage groupstudents
    Route::get('/teacher/group/manage/{id}', [GroupStudentController::class, 'index']);
    Route::post('/teacher/group/manage/{id}', [GroupStudentController::class, 'addStudent']);
    Route::delete('/teacher/group/manage/{id}', [GroupStudentController::class, 'destroy']);

    //manage student marks
    Route::get('/teacher/group/manage/marks/{group_id}', [StudentMarkController::class, 'index']);
    Route::post('/teacher/group/student/mark/add', [StudentMarkController::class, 'addMark']);
    Route::get('/teacher/group/student/mark/update/{student_id}', [StudentMarkController::class, 'show']);
    Route::put('/teacher/group/student/mark/update/{student_id}', [StudentMarkController::class, 'update']);

    //Topic
    Route::resource('/teacher/topic', TopicController::class);
    //Notice
    Route::resource('/teacher/notice', NoticeController::class);
    //tasks
    Route::resource('/teacher/tasks', TaskController::class);
});


//-------------------- Group Routes --------------------------------//

Route::middleware(['group'])->group(function () {

    Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student.index');
    Route::view('/student/notice', 'group.notice')->name('student-notice');
    Route::view('/student/tasks', 'group.notice')->name('student-tasks');
});

//--------------  Test Routes -------------
Route::get('/test', function(){
    session(['name'=>"Prohor Web"]);
});

Route::get('/all', [TestController::class, 'index']);
Route::get('/abc', [TestController::class, 'abc']);
