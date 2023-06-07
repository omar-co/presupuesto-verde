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
        Schema::table('objetivos_ambientales', function (Blueprint $table) {
            $table->string('convenio_diversidad')->after('user_id');
            $table->string('convenio_desertificacion')->after('convenio_diversidad');
            $table->string('recursos_convenio')->after('convenio_desertificacion');
            $table->string('recursos_convencion')->after('recursos_convenio');
            $table->string('plataforma_reduccion')->after('recursos_convencion');
            $table->string('recursos_plataforma')->after('plataforma_reduccion');
            $table->string('observaciones')->after('recursos_plataforma');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vinculacion_to_objetivos_ambientales', function (Blueprint $table) {
            $table->dropColumn('convenio_diversidad');
            $table->dropColumn('convenio_desertificacion');
            $table->dropColumn('recursos_convenio');
            $table->dropColumn('recursos_convencion');
            $table->dropColumn('plataforma_reduccion');
            $table->dropColumn('recursos_plataforma');
            $table->dropColumn('observaciones');
        });
    }
};
