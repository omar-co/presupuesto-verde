<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticaPublicaElemento extends Model
{
    use HasFactory;

    protected $table = 'politicas_publicas_elementos';

    protected $fillable = [
      'name',
      'parent_id',
      'politica_publica_id',
      'politica_publica_nivel_id',
    ];

    public function parent(): BelongsTo {
        return $this->belongsTo(PoliticaPublicaElemento::class);
    }

    public function children(): HasMany {
        return $this->hasMany(PoliticaPublicaElemento::class, 'parent_id');
    }

    public function politicaPublica(): BelongsTo {
        return $this->belongsTo(PoliticaPublica::class);
    }

    public function nivel(): BelongsTo {
        return $this->belongsTo(PoliticaPublicaNivel::class);
    }
}
