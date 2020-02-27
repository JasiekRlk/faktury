<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprzedawcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprzedawcas', function(Blueprint $table){
            
            $table->increments('id');
            $table->string('sprzedawca');
            $table->string('nip_sprzedawca');
            $table->string('ulica_sprzedawca');
            $table->string('miasto_spzedawca');
            $table->string('kod_pocztowy_sprzedawca');


        });
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}