<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'imgsrc', 'detail', 'time','body'
    ];

}
