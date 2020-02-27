<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNabywcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              
        Schema::create('nabywcas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nabywca');
            $table->string('nip_nabywca');
            $table->string('ulica_nabywca');
            $table->string('miasto_nabywca');
            $table->string('kod_pocztowy_nabywca');  
      
    

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