<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable=['topic_id','topic_description','t_id'];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'topic_id', 'topic_id');
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 't_id', 't_id');
    }
}
