<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityItem extends Model
{
    protected $fillable = [
        'type_id','img_src','big_img_src','title','address','time','desrc','process','contact'
    ];
    public function type(){
        return $this->belongsTo(ActivityType::class);
    }
}
