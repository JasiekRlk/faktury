<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakturas', function(Blueprint $table){      
            $table->increments('id');
            $table->unsignedinteger('sprzedawca_id');
            $table->unsignedinteger('nabywca_id');
            $table->string('typ_faktury');
            $table->date('data_wystawienia');
            $table->string('mejsce_wystawienia');
            $table->date('data_sprzedazy');
            $table->string('towar_usluga');
            $table->string('jm');
            $table->bigInteger('ilosc');
            $table->bigInteger('cena_netto');
            $table->bigInteger('watosc_netto');
            $table->bigInteger('stawka_vat');
            $table->bigInteger('kwota_vat');
            $table->bigInteger('wartosc_brutto');
            $table->string('status');
            $table->string('sposob_platnosci');
            $table->string('numer_konta');
            $table->date('termin_platnosci');
           
               
        });
        Schema::table('fakturas',function($table){
            $table->foreign('sprzedawca_id')
            ->references('id')->on('sprzedawcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->foreign('nabywca_id')
            ->references('id')->on('nabywcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

    }
    public function down()
    {
 
       Schema::dropIfExists('fakturas');
       Schema::enableForeignKeyConstraints();
    }
}