<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('bulan');           
            $table->date('tanggal');
            $table->string('penerimaan');
            $table->string('potongan');
            $table->string('honor_perjam');
            $table->string('total_jam'); 
            $table->string('bayar');                                               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}
