<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticaPublicaNivel extends Model
{
    use HasFactory;

    protected $table = 'politicas_publicas_niveles';

    protected $fillable = [
      'name',
      'politica_publica_id',
    ];

    public function politicaPublica(): BelongsTo {
        return $this->belongsTo(PoliticaPublica::class);
    }


    public function elementos(): HasMany {
        return $this->hasMany(PoliticaPublicaElemento::class);
    }
}
