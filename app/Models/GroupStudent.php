<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStudent extends Model
{
    use HasFactory;

    protected $fillable=['group_id','student_id'];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'group_id');
    }
    public function students()
    {
        return $this->hasMany(Student::class, 'student_id', 'student_id');
    }

}
