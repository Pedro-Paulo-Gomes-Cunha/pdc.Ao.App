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
        Schema::create('historico_clinicos', function (Blueprint $table) {
            $table->id();
            $table->string('exame_efetuado')->nullable();
            $table->string('resultado')->nullable();
            $table->string('dignostico')->nullable();
            $table->string('procedimento')->nullable();
            $table->string('terapeutica')->nullable();
            $table->integer('medico')->nullable();
            $table->foreignIdFor(Utente::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_clinicos');
    }
};
