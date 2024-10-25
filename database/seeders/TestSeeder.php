<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * $ php artisan db:wipe
     * $ php artisan migrate
     * $ php artisan db:seed TestSeeder
     * 
     */
    public function run(): void
    {
        // __DIR__ genere le nom du dossier automatiquement et renvoye le chemin complete.file_get_contentscharge le ficher dans le contenue d'une variable
        $sql = file_get_contents(__DIR__.'/contact.sql');
        DB::unprepared($sql);
        
        $sql = file_get_contents(__DIR__.'/actus.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/produits.sql');
        DB::unprepared($sql);
    }
}
