<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Presupuesto extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'form_id',
      'catalogo_id',
      'monto',
      'presupuestable_id',
      'presupuestable_type',
    ];


    public function form(): BelongsTo {
        return $this->belongsTo(Form::class);
    }

    public function presupuestable(): MorphTo {
        return $this->morphTo();
    }
}
