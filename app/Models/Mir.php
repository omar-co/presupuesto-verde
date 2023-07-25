<?php

namespace App\Models;

use App\Scopes\ByCiclo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mir extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ByCiclo);
    }
}
