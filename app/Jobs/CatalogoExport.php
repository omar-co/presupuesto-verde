<?php

namespace App\Jobs;

use App\Models\Catalogo;
use App\Models\Export;
use Carbon\Carbon;
use Generator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Rap2hpoutre\FastExcel\FastExcel;

class CatalogoExport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private Export $export)
    {
        //
    }

    private function catalogoGenerator(): Generator {
        foreach (Catalogo::query()->cursor() as $row) {
            yield $row;
        }
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $date = Carbon::now()->format('d-m-Y-H-i-s');
        $basePath = 'storage/app/';
        $path = "exports/catalogo/programas_presupuestales_{$date}.csv";
        info(realpath('storage/app/exports/catalogo'));
        (new FastExcel($this->catalogoGenerator()))->export($basePath . $path);

        $this->export->path = $path;
        $this->export->completed = true;
        $this->export->save();
    }
}
