<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
        'avatar', 'name', 'desrc', 'body', 'e_name', 'job'
    ];

}
