<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;
    protected $fillable=['p0','p1','p2','p3','p4',
    'p5','p6','p7','p8','p9','p10','p11','p12'];
}
