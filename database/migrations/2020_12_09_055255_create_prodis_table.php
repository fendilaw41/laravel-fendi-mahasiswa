<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('prodis');
        Schema::create('prodis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_prodi', 20);
            $table->string('jenjang', 20);
            $table->string('prodi_id')->index();
            $table->integer('fakultas_id')->index();
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
        Schema::dropIfExists('prodis');
    }
}
