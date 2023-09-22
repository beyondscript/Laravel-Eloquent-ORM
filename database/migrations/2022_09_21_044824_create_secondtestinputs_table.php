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
        Schema::create('secondtestinputs', function (Blueprint $table) {
            $table->id();
            $table->string('text2');
            $table->unsignedBigInteger('ti_id');
            $table->foreign('ti_id')->references('id')->on('testinputs')->onDelete('cascade');
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
        Schema::dropIfExists('secondtestinputs');
    }
};
