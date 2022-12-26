<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=['t_id','t_name','department', 'status','email', 'password'];

    public function groups()
    {
        return $this->hasMany(Group::class, 't_id', 't_id');
    }
    public function topics()
    {
        return $this->hasMany(Topic::class, 't_id', 't_id');
    }
    public function notices()
    {
        return $this->hasMany(Notice::class, 't_id', 't_id');
    }
    public function tasks()
    {
        return $this->hasMany(Task::class, 't_id', 't_id');
    }
}
