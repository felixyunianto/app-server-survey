<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaans";

    public function sub1(){
        return $this->belongsTo('App\Sub_category','foreign-key');
    }
}
