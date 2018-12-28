<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffered2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('deliver');
            $table->text('description');
            $table->string('custom_01')->nullable();
            $table->string('custom_02')->nullable();
            $table->string('custom_03')->nullable();
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
        Schema::drop('offered2');
    }
}
