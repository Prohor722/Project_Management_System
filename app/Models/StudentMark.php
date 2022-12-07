<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    use HasFactory;
    protected $fillable=['student_id','po1','po2','po3','po4',
    'po5','po6','po7','po8','po9','po10','po11','po12', 'total'];

    public function students()
    {
        return $this->hasOne(Student::class, 'student_id', 'student_id');
    }
}
