<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undergrounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acompanhante');
            $table->integer('galeria');
            $table->char('statusPagamento');
            $table->char('statusDeEntrada');
            $table->date('dataDeEntrada');
            $table->date('pagoNaData');
            $table->date('iniciaAnuncio');
            $table->date('terminaAnuncio');
            $table->timestamps();
        });



        Schema::table('undergrounds', function (Blueprint $table) {
            $table
            ->foreign('id_acompanhante')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undergrounds');
    }
};
