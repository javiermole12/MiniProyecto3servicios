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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('empresa_id');
            $table->string('nombre');
            $table->string('email')->nullable();
            $table->string('contrasenya');
            $table->timestamps();
        });
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('empresa_id');
            $table->string('nombre');
            $table->string('email')->nullable();
            $table->string('contrasenya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
