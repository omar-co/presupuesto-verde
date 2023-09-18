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
        Schema::table('cambio_climaticos', function (Blueprint $table) {
            $table->string('clasificacion_p1', 4)->nullable();
            $table->string('clasificacion_p2', 4)->nullable();
            $table->string('clasificacion_p3', 4)->nullable();
            $table->string('clasificacion_p3_gasto', 4)->nullable();
            $table->string('clasificacion_p4', 4)->nullable();
            $table->string('clasificacion_p5', 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cambio_climaticos', function (Blueprint $table) {
            $table->dropColumn('clasificacion_p1');
            $table->dropColumn('clasificacion_p2');
            $table->dropColumn('clasificacion_p3');
            $table->dropColumn('clasificacion_p3_gasto');
            $table->dropColumn('clasificacion_p4');
            $table->dropColumn('clasificacion_p5');
        });
    }
};
