<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable=['group_id','topic_id','t_id','group_status','password'];

    public function group_students()
    {
        return $this->hasMany(GroupStudent::class, 'group_id', 'group_id');
    }
    public function topics()
    {
        return $this->hasOne(Topic::class, 'topic_id', 'topic_id');
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 't_id', 't_id');
    }
    public function group_links()
    {
        return $this->hasMany(GroupLink::class, 'group_id', 'group_id');
    }
}
