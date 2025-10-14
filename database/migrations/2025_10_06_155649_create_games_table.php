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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->boolean("Risultato");
            $table->date("data");
            $table->string("ruolo");
            $table->unsignedBigInteger("campione_id");
            $table->unsignedBigInteger("errori_id");
            $table->foreign('campione_id')
                ->references('id')
                ->on('campioni');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
