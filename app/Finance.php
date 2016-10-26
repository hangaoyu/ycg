<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = [
        'title', 'author', 'desrc', 'imgsrc', 'time', 'other', 'content','other',
    ];
}
