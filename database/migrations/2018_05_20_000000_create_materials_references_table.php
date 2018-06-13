<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials_references', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->enum('type', ['NFC', 'QRCode', 'Code BAR']);

            $table->unique(['material_id', 'type']);
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
        Schema::drop('materials_references');
    }
}
