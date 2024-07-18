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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acompanhante');
            $table->string('video',200);
            $table->string('pasta',200);
            $table->string('capa',10);
            $table->string('descricao',800);
            $table->timestamps();
        });

        Schema::table('videos', function($table)
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
        Schema::dropIfExists('videos');
    }
};
