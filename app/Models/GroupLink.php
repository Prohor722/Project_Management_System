<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupLink extends Model
{
    use HasFactory;

    protected $fillable=['group_id','task_id','link'];

    public function groups()
    {
        return $this->belongsTo(Group::class, 'group_id', 'group_id');
    }
    public function tasks()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
