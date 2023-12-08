<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenduduk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dusun_id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('nomortelepon');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->foreign('dusun_id')->references('id')->on('dusun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapenduduk');
    }
};
