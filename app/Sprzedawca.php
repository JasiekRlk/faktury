<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprzedawca extends Model
{
    public $timestamps = false;
    public function faktura1(){
        return $this->hasMany('App\Faktura');
    }
}