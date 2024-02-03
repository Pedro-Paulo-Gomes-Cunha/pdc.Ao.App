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
        Schema::create('utentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date("data_nascimento");
           
            $table->string("genero");
            $table->string("telefone");
            $table->string("bi")->nullable();
            $table->string("provincia");
            $table->string("municipio");
            $table->string("seguro");
            $table->string("numero_seguro");
            $table->string("referencia")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utentes');
    }
};
