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
        Schema::create('acompanhantes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_acompanhante');
            $table->string('username');
            $table->char('Genero');
            $table->integer('valor');
            $table->date('idade');
            $table->char('OralSemCamisa', 5);
            $table->char('FinalizaOral', 5);
            $table->char('DuplaPenetracao', 5);
            $table->char('Anal', 5);
            $table->char('Grupal', 5);
            $table->char('Lesbianismo', 5);
            $table->char('ChuvaDourada', 5);
            $table->char('Filma', 5);
            $table->char('Fotografa', 5);
            $table->char('Viaja', 5);
            $table->longText('descricao',2000);
            $table->timestamps();
        });

        Schema::table('acompanhantes', function($table)
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
        Schema::dropIfExists('acompanhantes');
    }
};
