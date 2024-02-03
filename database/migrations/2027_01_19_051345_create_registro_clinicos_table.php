<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Utente};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registro_clinicos', function (Blueprint $table) {
            $table->id();
            $table->string('grupo_sanguinio',5)->nullable();
            $table->json('alergias')->nullable();
            $table->json('historico_saude')->nullable();
            $table->string('boletim_vacina')->default('Nenhum');
            $table->foreignIdFor(Utente::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_clinicos');
    }
};
