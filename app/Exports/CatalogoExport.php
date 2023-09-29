<?php

namespace App\Exports;

use App\Models\Catalogo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class CatalogoExport implements FromQuery, ShouldQueue
{
    use Exportable;

    public function query(): Relation|Builder|\Illuminate\Database\Query\Builder {
        return Catalogo::query();
    }
}
