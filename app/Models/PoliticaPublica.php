<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticaPublica extends Model
{
    use HasFactory;

    protected $table = 'politicas_publicas';

    protected $fillable = [
        'name',
        'active',
        'user_id',
        'objetivos_ambientales',
        'cambio_climatico',
        'ingresos_verdes',
    ];

    protected $casts = [

    ];

    public function niveles(): HasMany {
        return $this->hasMany(PoliticaPublicaNivel::class);
    }

    public function elementos(): HasMany {
        return $this->hasMany(PoliticaPublicaElemento::class);
    }
}
