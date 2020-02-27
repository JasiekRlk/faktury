<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nabywca extends Model
{
    public $timestamps = false;
    public function faktura_nabywca(){
        return $this->hasMany('App\Faktura');
    }
}
