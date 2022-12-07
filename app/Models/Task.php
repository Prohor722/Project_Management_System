<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=['task_title','task_description','course_code', 'deadline'];

    public function group_links()
    {
        return $this->hasMany(GroupLink::class, 'task_id');
    }
}
