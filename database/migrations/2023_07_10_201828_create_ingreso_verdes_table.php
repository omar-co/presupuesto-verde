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
        Schema::create('ingreso_verdes', function (Blueprint $table) {
            $table->id();

            $table->string('objetivo');
            $table->string('destino');

            $table->string('efecto');

            $table->foreignId('politica_publica_id')->constrained('politicas_publicas');
            $table->string('nivel_uno')->nullable(); //TODO: hacerlo a muchos a muchos?
            $table->string('nivel_dos')->nullable();
            $table->string('nivel_tres')->nullable();
            $table->string('nivel_cuatro')->nullable();
            $table->mediumText('actividades_o_proyectos')->nullable();
            $table->string('indicador')->nullable();
            $table->string('periodo_implementacion')->nullable();
            $table->string('etapa')->nullable();


            $table->string('clasificacion_p1')->nullable();
            $table->string('clasificacion_p2')->nullable();
            $table->string('clasificacion_p2_extra')->nullable();
            $table->string('clasificacion_p3')->nullable();
            $table->string('clasificacion_p4')->nullable();
            $table->string('clasificacion_p4_extra')->nullable();
            $table->string('clasificacion_p5')->nullable();
            $table->string('clasificacion_tipo_gasto')->nullable();
            $table->integer('clasificacion_puntaje')->nullable();

            $table->string('ciclo');
            $table->integer('ramo_id')->nullable();
            $table->integer('modalidad_id')->nullable();
            $table->integer('programa_presupuestario_id')->nullable();
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
        Schema::dropIfExists('ingreso_verdes');
    }
};
