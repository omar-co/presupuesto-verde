<?php

namespace App\Models;

use App\Casts\Monto;
use App\Events\SavingRegistry;
use App\Scopes\ByCiclo;
use App\Scopes\ByUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IngresoVerde extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'saving' => SavingRegistry::class,
    ];

    protected $fillable = [
        'ciclo',
        'user_id',
        'form_id',
        'ramo_id',
        'modalidad_id',
        'programa_presupuestario_id',

        'objetivo',
        'destino',

        'efecto',
        'tipo_ingreso',
        'tipo_ingreso_uno',
        'tipo_ingreso_dos',
        'monto',

        'politica_publica_id',
        'nivel_uno',
        'nivel_dos',
        'nivel_tres',
        'nivel_cuatro',
        'actividades_o_proyectos',
        'indicador',
        'periodo_implementacion',
        'etapa',

        'clasificacion_p1',
        'clasificacion_p2',
        'clasificacion_p3',
        'clasificacion_p3_gasto',
        'clasificacion_p4',
        'clasificacion_p5',
        'clasificacion_tipo_gasto',
        'clasificacion_puntaje',
    ];

    protected $casts = [
        'monto' => Monto::class,
        'nivel_uno' => 'array',
        'nivel_dos' => 'array',
        'nivel_tres' => 'array',
        'nivel_cuatro' => 'array',
        'etapa' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ByUserScope);
        static::addGlobalScope(new ByCiclo);
    }


    public function ramo(): BelongsTo {
        return $this->createCatalogRelationship('ramo');
    }
    public function modalidad(): BelongsTo {
        return $this->createCatalogRelationship('modalidad');
    }

    public function pp(): BelongsTo {
        return $this->createCatalogRelationship('programa_presupuestario', 'pp');
    }

    public function presupuestos() {
        return $this->morphMany(Presupuesto::class, 'presupuestable');
    }

    private function createCatalogRelationship(string $key, string $foreign = null): BelongsTo {

        if (!$foreign) {
            $foreign = $key;
        }

        return $this->belongsTo(Catalogo::class,"{$key}_id", "id_{$foreign}")
            ->select(["id_{$foreign}", "desc_{$foreign}"])
            ->groupBy(["id_{$foreign}", "desc_{$foreign}"]);
    }
}
