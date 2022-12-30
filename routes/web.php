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

    //teacher profile
    Route::get('/teacher/profile', [TeacherController::class, 'showProfile']);
    Route::put('/teacher/profile/update', [TeacherController::class, 'updateProfile'])->middleware('isActive');

    //groups
    Route::resource('/teacher/groups', GroupController::class);
    Route::get('/teacher/groupsInActive', [GroupController::class, 'inActiveGroups']);
    Route::post('/teacher/groups/search', [GroupController::class, 'groupSearch']);

    //manage groupstudents
    Route::get('/teacher/group/manage/{id}', [GroupStudentController::class, 'index']);
    Route::post('/teacher/group/manage/{id}', [GroupStudentController::class, 'addStudent'])->middleware('isActive');
    Route::delete('/teacher/group/manage/{id}', [GroupStudentController::class, 'destroy'])->middleware('isActive');

    //manage student marks
    Route::get('/teacher/group/manage/marks/{group_id}', [StudentMarkController::class, 'index']);
    Route::post('/teacher/group/student/mark/add', [StudentMarkController::class, 'addMark'])->middleware('isActive');
    Route::get('/teacher/group/student/mark/update/{student_id}', [StudentMarkController::class, 'show'])->middleware('isActive');
    Route::put('/teacher/group/student/mark/update/{student_id}', [StudentMarkController::class, 'update'])->middleware('isActive');

    //Topic
    Route::resource('/teacher/topic', TopicController::class);
    //Notice
    Route::resource('/teacher/notice', NoticeController::class);
    //tasks
    Route::resource('/teacher/tasks', TaskController::class);
});


//-------------------- Group Routes --------------------------------//

Route::middleware(['group'])->group(function () {

    Route::get('/student', [GroupController::class, 'studentIndex']);
    Route::get('/student/tasks',[GroupController::class, 'studentTasks'])->name('student-tasks');
    Route::get('/student/result',[GroupController::class, 'studentResult']);
    Route::get('/student/task/{id}',[GroupController::class, 'studentTask']);
    Route::post('/student/task/{id}',[GroupController::class, 'studentTaskSubmit'])->middleware('isActive');
    Route::get('/student/change-password',[GroupController::class, 'studentChangePass'])->middleware('isActive');
    Route::post('/student/changePassword',[GroupController::class, 'studentPassUpdate'])->middleware('isActive');
});

//--------------  Test Routes -------------
Route::get('/test', function(){
    session(['name'=>"Prohor Web"]);
});

Route::get('/all', [TestController::class, 'index']);
Route::get('/abc', [TestController::class, 'abc']);
