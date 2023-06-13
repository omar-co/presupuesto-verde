<?php

namespace App\Models;

use App\Events\SavingRegistry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ObjetivoAmbiental extends Model
{
    use HasFactory;

    protected $table = 'objetivos_ambientales';

    protected $dispatchesEvents = [
      'saving' => SavingRegistry::class,
    ];

    protected $fillable = [
        'ciclo',
        'user_id',
        'ramo_id',
        'promarnat_objetivo_id',
        'modalidad_id',
        'programa_presupuestario_id',
        'convenio_diversidad',
        'convenio_desertificacion',
        'recursos_convenio',
        'recursos_convencion',
        'plataforma_reduccion',
        'recursos_plataforma',
        'observaciones',
    ];
}
