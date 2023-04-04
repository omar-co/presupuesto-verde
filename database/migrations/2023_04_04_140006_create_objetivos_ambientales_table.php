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
        Schema::create('objetivos_ambientales', function (Blueprint $table) {
            $table->id();
            $table->string('ciclo');
            $table->integer('ramo_id')->index()->nullable();
            $table->integer('modalidad_id');
            $table->integer('programa_presupuestario_id');
            $table->string('actividad_institucional');
            $table->string('unidad_responsable');
            $table->integer('mir_nivel_id');
            $table->integer('mir_objetivo_id');
            $table->integer('mir_proposito_id');
            $table->string('componentes')->nullable();
            $table->text('actividades_con_incidencia')->nullable();
            $table->integer('ods_id');

            $table->integer('promarnat_objetivo_id');
            $table->integer('promarnat_estrategia_id');
            $table->integer('promarnat_actividad_id');
            $table->mediumText('promarnat_actividades')->nullable();
            $table->mediumText('promarnat_indicador_propuesto')->nullable();
            $table->mediumText('promarnat_periodo_implementacion')->nullable();
            $table->mediumText('promarnat_estapa_politica_id')->nullable();

            $table->integer('user_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetivos_ambientales');
    }
};
