<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = "sub_categories";
    public $incrementing    =   false;


    public function category()
    {
        return $this->belongsTo('App\Category','foreign-key');
    }
    public function questions(){
        return $this->hasMany('App\Pertanyaan','sub_id','id');
    }
}
