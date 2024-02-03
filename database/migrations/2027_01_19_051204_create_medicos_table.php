<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{User,Endereco,Contato};


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->date('nascimento');
            $table->string('bi');
            $table->string('genero');
            $table->string('especialidade');
            $table->foreignIdFor(Endereco::class);
            $table->foreignIdFor(Contato::class);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
