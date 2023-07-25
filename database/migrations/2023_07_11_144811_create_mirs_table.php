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
        Schema::create('mirs', function (Blueprint $table) {
            $table->id();
            $table->integer('ciclo')->nullable();
            $table->integer('id_ramo')->nullable();
            $table->integer('id_objetivo')->nullable();
            $table->text('desc_objetivo')->nullable();
            $table->integer('id_nivel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mirs');
    }
};
