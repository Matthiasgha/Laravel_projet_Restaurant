<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // php artisan make:migration create_contact_table pour la création de la table migrate
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            // titere M. Mme (enum) 
            $table->enum('titre', ['M.','Mme']);
            // Nom (varchar)
            $table->string('nom', 40);
            // prénom (varchar)
            $table->string('prenom',40);
            //  mail (varchar)
            $table->string('mail',100);
            // tél (varchar)
            $table->string('telephone',20);
            // message(text)
            $table->text('message');
            // date de réservation(datetime) timestamp est pour l'eurodatage la difference fonctionnel plus grande emplitude avec datetime
            $table->dateTime('date_reservation');
            // nombre personnes (int)
            $table->unsignedTinyInteger('nombre_personnes');
            // réservation (boolean)
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
