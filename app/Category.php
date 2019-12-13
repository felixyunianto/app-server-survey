<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table     =  'categories';        
    public $timestamps   =   false;

    public function sub()
    {
        return $this->hasMany('App\Sub_Category','category_id','id');
    }

    // public function getSubAttribute()
    // {
    //     return $this->attributes['sub_categories'] == 'yes';
    // }
}
