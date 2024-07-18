<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
        // Chama classe no caminho database.popularDB.php
        $this->call(popularDB::class);

        // Chamando o método call, e especificando a classe
        $this->call(UserSeeder::class);

        // popular a tabela acompanhantes.
        $this->call(AcompanhantesTab::class);






    }
}
