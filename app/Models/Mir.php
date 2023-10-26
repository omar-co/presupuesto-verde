<?php

namespace App\Models;

use App\Scopes\ByCiclo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mir extends Model
{
    use HasFactory;

    protected $fillable = [
      'ciclo',
      'id_ramo',
      'id_objetivo',
      'desc_objetivo',
      'id_nivel',
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ByCiclo);
    }
}
