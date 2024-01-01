<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie_tag', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('movie_id');
            // nome della colonna che conterrà l'id dei movie
            $table->foreign('movie_id')->references('id')->on('movies');
            // questo movie_id sarà il riferimento degli id sulla tabella movies
            // stiamo vincolando la foreign key sulla cartella movies


            // $table->unsignedBigInteger('tag_id')->nullable()->after('author');
            // $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreignId('tag_id')->constrained();
            // SHORTCUT di quella di sopra delle due righe 
            // questa sintassi 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_tag');
    }
};
