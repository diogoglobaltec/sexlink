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
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acompanhante');
            $table->string('foto',200);
            $table->string('pasta',200);
            $table->string('capa',200);
            $table->string('descricao',800);
            $table->timestamps();
        });

        Schema::table('fotos', function($table)
        {
            $table->foreign('id_acompanhante')->
                references('id')->
                on('users')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
};
