<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name',
        'question',
        'q1',
        'q2',
        'q3',
        'q4',
        'right_answer',
    ];
}
