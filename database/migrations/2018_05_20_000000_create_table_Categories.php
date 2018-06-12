<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorie', function (Blueprint $table) {
            $table->increments('id_cat');
            $table->primary('id_cat');
            $table->string('nom')->nullable(false)->change();
            $table->integer('contenant');
            $table->foreign('contenant')->references('id_cat')->on('Categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Categorie');
    }
}
