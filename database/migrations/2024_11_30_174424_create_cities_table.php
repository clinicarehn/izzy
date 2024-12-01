<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('state_id');  // Relación con states
            $table->timestamps();

            // Relación foránea con states (sin 'onDelete' ya que SQL Server lo maneja diferente)
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
