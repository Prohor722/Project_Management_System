<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=['task_title','task_description', 'deadline', 't_id'];

    public function group_links()
    {
        return $this->hasMany(GroupLink::class, 'task_id');
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 't_id', 't_id');
    }
}
