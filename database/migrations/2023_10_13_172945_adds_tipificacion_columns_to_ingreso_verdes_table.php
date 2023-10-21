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
        Schema::table('ingreso_verdes', function (Blueprint $table) {
            $table->string('tipo_ingreso')->after('form_id');
            $table->tinyInteger('tipo_ingreso_uno')->after('tipo_ingreso');
            $table->tinyInteger('tipo_ingreso_dos')->nullable()->after('tipo_ingreso_uno');
            $table->unsignedBigInteger('monto')->after('tipo_ingreso_dos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ingreso_verdes', function (Blueprint $table) {
            //
        });
    }
};
