<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;

    private function capitulos(string $modalidad): array|bool {
        $capitulos = [
            'A' => [2000, 3000],
            'B' => [5000, 6000],
            'E' => [1000, 2000],
            'F' => [2000, 3000],
            'G' => [1000, 2000],
            'K' => [6000],
            'M' => [5000],
            'N' => [4000],
            'P' => [3000, 4000],
            'R' => [4000],
            'S' => [4000],
            'U' => [4000],
        ];

        if (array_key_exists($modalidad, $capitulos)) {
            return $capitulos[$modalidad];
        }

        return false;
    }

    public function scopeReferencia($query, $filter, $modalidad) {
        $capitulos = $this->capitulos($modalidad);
        if ($filter && $capitulos) {
            return $query->whereIn('id_capitulo', $capitulos);
        }

        return $query;
    }

    public function cat() {
        return $this->belongsTo(Catalogo::class);
    }
}
