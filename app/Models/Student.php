<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['student_id','student_name','department','status', 'email','password'];

    public function student_marks(){
        return $this->belongsTo(StudentMark::class, 'student_id', 'student_id');
    }
    public function group_students()
    {
        return $this->belongsToMany(GroupStudent::class, 'student_id', 'student_id');
    }
}
