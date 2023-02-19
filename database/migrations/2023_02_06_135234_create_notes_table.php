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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket');
            $table->string('tgl_done');
            $table->string('jam');
            $table->string('sampai_lokasi');
            $table->string('tingkat_kondisi');
            $table->string('tingkat_gangguan');
            $table->string('lama_penanganan');
            $table->string('lokasi')->nullable();
            $table->string('perangkat');
            $table->string('deskripsi');
            $table->string('perbaikan');
            $table->string('penyebab');
            $table->string('solusi');
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
        Schema::dropIfExists('notes');
    }
};
