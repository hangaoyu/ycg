<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic extends Model
{
    //
    protected $fillable = [
        'title', 'subtitle', 'time'
    ];
}
