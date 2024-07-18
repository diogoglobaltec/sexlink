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
        Schema::create('recados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_acompanhante');
            $table->string('recado');
            $table->string('local');
            $table->date('eventoDia');
            $table->timestamps();
        });


        Schema::table('recados', function($table)
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
        Schema::dropIfExists('recados');
    }
};
