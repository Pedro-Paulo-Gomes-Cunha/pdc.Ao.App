<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Utente,Medico,Contato};


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_exame');
            $table->dateTime('data_marcacao');
            $table->dateTime('data_realizacao')->nullable();
            $table->string('anexos')->nullable();
            $table->boolean('status')->default(false)->nullable();
            $table->foreignIdFor(Utente::class);
            $table->foreignIdFor(Medico::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
