<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis');
            $table->string('nama');
            $table->string('alamat');
            $table->string('agama');
            $table->string('jurusan');
            $table->string('rombel');
            $table->string('nohp');
            $table->string('pembimbing');
            $table->string('rayon');
            
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
        Schema::dropIfExists('table_siswa');
    }
}
