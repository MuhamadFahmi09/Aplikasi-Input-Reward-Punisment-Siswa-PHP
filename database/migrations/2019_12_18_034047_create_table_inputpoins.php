<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInputpoins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_inputpoins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kejadian');
            $table->string('nama');
            $table->string('poin');
            $table->string('kategori');
            $table->string('kasus');
            $table->string('saksi');
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
        Schema::dropIfExists('table_inputpoins');
    }
}
