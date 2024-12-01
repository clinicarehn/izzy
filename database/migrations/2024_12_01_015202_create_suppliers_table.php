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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);  // Nombre del cliente
            $table->string('rtn', 14)->unique();  // RTN
            $table->string('email')->nullable();  // Email
            $table->string('phone', 8);  // Teléfono            
            $table->unsignedBigInteger('country_id');  // Relación con countries
            $table->unsignedBigInteger('departamento_id');  // Relación con states
            $table->unsignedBigInteger('municipio_id');  // Relación con cities
            $table->string('address', 255);  // Dirección

            // Relaciones foráneas (sin 'onDelete' ya que SQL Server lo maneja diferente)
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('departamento_id')->references('id')->on('states');
            $table->foreign('municipio_id')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
