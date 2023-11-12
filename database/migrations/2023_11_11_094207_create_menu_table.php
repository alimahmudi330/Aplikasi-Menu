<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string('nama_menu');
            $table->string('gambar');
            $table->string('diskripsi');
            $table->string('kategori');
            $table->string('status');
            $table->integer('harga');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
