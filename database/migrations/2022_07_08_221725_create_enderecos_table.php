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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acompanhante');
            $table->string('name');
            $table->string('telefone', 25);
            $table->string('estado',200);
            $table->string('cidade',200);
            $table->string('regiao',200);
            $table->string('bairro',200);
            $table->string('rua',200);
            $table->integer('numero');
            $table->foreign('id_acompanhante')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('enderecos');
    }
};
