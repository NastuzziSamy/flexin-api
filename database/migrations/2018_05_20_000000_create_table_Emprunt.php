<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEmpruntTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emprunt', function (Blueprint $table) {
            $table->string('mat_ref');
            $table->enum('mat_tag', ['nfc', 'qrcode']);
            $table->primary(['mat_ref', 'mat_tag']);
            $table->foreign('mat_ref')->references('reference')->on('Materiel');
            $table->foreign('mat_tag')->references('typeTag')->on('Materiel');
            $table->integer('emprunteur')->nullable(false)->change();
            $table->integer('superviseur')->nullable(false)->change();
            $table->foreign('emprunteur')->references('id_pers')->on('Personne');
            $table->foreign('superviseur')->references('id_pers')->on('Personne');
            $table->date('dateEmprunt')->nullable(false)->change();
            $table->date('dateRetour');
            $table->date('dateRetourPrevue')->nullable(false)->change();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Emprunt');
    }
}
