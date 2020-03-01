<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faktura extends Model
{
    public $timestamps = false;

    public function nabywca(){
        return $this->belongsTo('App\Nabywca', 'nabywca_id');
    }
    public function sprzedawca(){
        return $this->belongsTo('App\Sprzedawca', 'sprzedawca_id');
        
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
