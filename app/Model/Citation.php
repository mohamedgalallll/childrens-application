<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $fillable = [
        'title',
        'text',
        'description',
        'count',
        'icon',
        'image',
    ];
}
