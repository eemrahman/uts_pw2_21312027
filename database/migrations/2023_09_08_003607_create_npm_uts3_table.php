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
        Schema::create('npm_uts3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uts3_f1', 45);
            $table->string('uts3_f2', 45);
            $table->string('uts3_f3', 45);
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
        Schema::dropIfExists('npm_uts3');
    }
};
