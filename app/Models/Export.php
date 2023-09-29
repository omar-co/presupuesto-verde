<?php

namespace App\Models;

use App\Scopes\ByUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Export extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciclo',
        'user_id',
        'type',
        'completed',
        'path',
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ByUserScope);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
