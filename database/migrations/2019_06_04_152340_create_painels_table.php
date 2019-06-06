<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('painel.painels', function (Blueprint $table) {
            $table->increments('id');
            $table->text('secao');
            $table->integer('senha');
            $table->text('tipo');
            $table->integer('flag');
            $table->text('atendente');
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
        Schema::dropIfExists('painels');
    }
}
