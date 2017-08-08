<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerekMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merek_mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_merek');
            $table->integer('tipe_id')->unsigned();
            $table->foreign('tipe_id')->references('id')->on('tipe_mobils')
                  ->onUpdate('cascade')->onDelete('cascade');
                  
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
        Schema::dropIfExists('merek_mobils');
    }
}
