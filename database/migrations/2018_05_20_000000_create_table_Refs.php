<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Refs', function (Blueprint $table) {
            $table->string('reference');
            $table->enum('typeTag', ['nfc', 'qrcode']);
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
        Schema::drop('Refs');
    }
}
