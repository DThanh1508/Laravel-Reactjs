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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('mf_id');
            // $table->foreign('mf_id')->references('id')->
            // on('mfs') ->onUpdate('cascade')
            // ->onDelete('cascade');
            $table->string('make');
            $table->string('model');
            $table->date('produced_on');
            $table->timestamps();
            $table->text('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
