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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->string('area');
            $table->string('sub_category');
            $table->string('sub_category_type')->nullable();
            $table->string('request_detail');
            $table->string('subject');
            $table->string('petugas_teknisi')->nullable();
            $table->string('devisi')->nullable();
            $table->string('regu')->nullable();
            $table->string('problem');
            $table->string('pelapor');
            $table->string('location');
            $table->string('image')->nullable();
            $table->string('status')->default('open');
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
        Schema::dropIfExists('tickets');
    }
};
