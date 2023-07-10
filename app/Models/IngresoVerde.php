<?php

namespace App\Models;

use App\Events\SavingRegistry;
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

        'politica_publica_id',
        'nivel_uno',
        'nivel_dos',
        'nivel_tres',
        'nivel_cuatro',
        'actividades_o_proyectos',
        'indicador',
        'periodo_implementacion',
        'etapa',

        'relevancia',

        'clasificacion_p1',
        'clasificacion_p2',
        'clasificacion_p3',
        'clasificacion_p3_gasto',
        'clasificacion_p4',
        'clasificacion_p5',
        'clasificacion_tipo_gasto',
        'clasificacion_puntaje',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ByUserScope);
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
