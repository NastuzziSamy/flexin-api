<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('picture');
            $table->text('description');
            $table->string('state')->nullable();
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('infrastructure_id');
            $table->foreign('infrastructure_id')->references('id')->on('infrastructures');
            $table->point('position')->nullable();
            $table->string('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations');

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
        Schema::drop('materials');
    }
}
