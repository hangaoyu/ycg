<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelfareItem extends Model
{
    protected $fillable = [
        'type_id','title','at_where','time','img_src','desrc','qq','wx','sina','address'
    ];
    public function type(){
        return $this->belongsTo(WelfareType::class);
    }
}
