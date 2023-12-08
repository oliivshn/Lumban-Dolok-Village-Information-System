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
        Schema::create('demografi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dusun_id');
            $table->string('jumlah_KK');
            $table->timestamps();
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
        Schema::dropIfExists('demografi');
    }
};
