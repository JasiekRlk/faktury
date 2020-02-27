<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nabywca extends Model
{
    public $timestamps = false;
    public function faktura2(){
        return $this->hasMany('App\Faktura');
    }
}
