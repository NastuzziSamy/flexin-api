<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personne', function (Blueprint $table) {
            $table->integer('id_pers')->autoincrement();
            $table->string('nom')->nullable(false)->change();
            $table->string('prenom')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('telephone');
            $table->string('entreprise');
            $table->enum('t', ['1', '2', '3'])->nullable(false)->change(); 
            /* si t=1 alors personnel, si t=2 alors responsable et si t=3 alors personne ext */
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Personne');
    }
}
