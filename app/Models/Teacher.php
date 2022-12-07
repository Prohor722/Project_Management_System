<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=['t_id','t_name','dept', 'status','email'];

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
        return $this->hasMany(Notic::class, 't_id', 't_id');
    }
}
