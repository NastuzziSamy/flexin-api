<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materiel', function (Blueprint $table) {
            $table->string('reference');
            $table->enum('typeTag', ['nfc', 'qrcode'])->nullable(false)->change();
            $table->string('nom')->nullable(false)->change();
            $table->string('photo');
            $table->string('etat')->nullable(false)->change();
            $table->text('description');
            $table->point('position');
            $table->string('emplacement_bat')->nullable(false)->change();
            $table->string('emplacement_salle')->nullable(false)->change();
            $table->foreign('emplacement_bat')->references('bat')->on('Emplacement');
            $table->foreign('emplacement_salle')->references('salle')->on('Emplacement');
            $table->integer('cat');
            $table->foreign('cat')->references('id_cat')->on('Categorie');
            $table->string('contenant_ref');
            $table->foreign('contenant_ref')->references('reference')->on('Materiel');
            $table->enum('contenant_tag', ['nfc', 'qrcode']);
            $table->foreign('contenant_tag')->references('typeTag')->on('Materiel');
            $table->string('infra')->nullable(false)->change();
            $table->foreign('infra')->references('nom')->on('Infrastructure');
            $table->primary(['reference', 'typeTag']);	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Materiel');
    }
}
