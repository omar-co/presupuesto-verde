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
        Schema::create('cambio_climaticos', function (Blueprint $table) {
            $table->id();

            $table->string('ciclo');
            $table->integer('ramo_id')->index();
            $table->char('modalidad_id');
            $table->integer('programa_presupuestario_id');
            $table->string('mir_nivel_id')->nullable();
            $table->integer('mir_objetivo_id')->nullable();
            $table->integer('mir_proposito_id')->nullable();
            $table->string('componentes')->nullable();
            $table->text('actividades_con_incidencia')->nullable();
            $table->integer('ods_id')->nullable();

            $table->foreignId('politica_publica_id')->constrained('politicas_publicas');
            $table->string('nivel_uno')->nullable(); //TODO: hacerlo a muchos a muchos?
            $table->string('nivel_dos')->nullable();
            $table->string('nivel_tres')->nullable();
            $table->string('nivel_cuatro')->nullable();
            $table->mediumText('actividades_o_proyectos')->nullable();
            $table->string('indicador')->nullable();
            $table->string('periodo_implementacion')->nullable();
            $table->string('etapa')->nullable();


            $table->string('convenio_diversidad')->nullable();
            $table->string('convenio_desertificacion')->nullable();
            $table->string('recursos_convenio')->nullable();
            $table->string('recursos_convencion')->nullable();
            $table->string('plataforma_reduccion')->nullable();
            $table->string('recursos_plataforma')->nullable();
            $table->mediumText('observaciones')->nullable();

            $table->boolean('tipo_contribucion')->nullable();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('form_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambio_climaticos');
    }
};
