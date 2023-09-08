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
        Schema::create('npm_uts2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uts2_f1', 45);
            $table->string('uts2_f2', 45);
            $table->string('uts2_f3', 45);
            $table->unsignedBigInteger('id_uts1');
            $table->foreign('id_uts1')->references('id')->on('npm_uts1');
            $table->unsignedBigInteger('id_uts3');
            $table->foreign('id_uts3')->references('id')->on('npm_uts3');
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
        Schema::dropIfExists('npm_uts2');
    }
};
