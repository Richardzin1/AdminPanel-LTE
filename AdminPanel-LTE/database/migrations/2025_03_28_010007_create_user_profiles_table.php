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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();  // Cria uma coluna de id auto-incremental (chave primária).
            $table->foreignId('user_id')  // Cria uma coluna de chave estrangeira chamada 'User_id'.
                ->constrained()  // Define que a chave estrangeira faz referência à tabela 'users'.
                ->cascadeOnUpdate();  // Define que, se o valor da chave primária na tabela 'users' for alterado, as referências na tabela 'user_profiles' serão automaticamente atualizadas
            $table->string('type')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
