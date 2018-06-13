<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials_parents', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('materials');

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
        Schema::drop('materials_parents');
    }
}
