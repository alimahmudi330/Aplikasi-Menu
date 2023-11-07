<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_minuman', function (Blueprint $table) {
            $table->id('id_minuman');
            $table->string('foto_minuman');
            $table->decimal('harga_minuman', 10, 2);
            $table->text('deskripsi_minuman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_minuman');
    }
};
