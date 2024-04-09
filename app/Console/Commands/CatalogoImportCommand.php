<?php

namespace App\Console\Commands;

use App\Models\Catalogo;
use App\Models\Import;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Rap2hpoutre\FastExcel\FastExcel;

class CatalogoImportCommand extends Command
{
    protected $signature = 'catalogo:import';

    protected $description = 'Command description';

    public function handle(): void
    {

        $import = Import::whereCompleted(false)->whereType('Catalogo')->first();

        if (!$import) {
            return;
        }

        $file = storage_path('app/public/' . $import->file);

        $this->import($file);
        $this->import($file, 'atcc');

        $import->completed = true;
        $import->save();
    }

    private function import($file, $connection = 'mysql')
    {
        (new FastExcel())->import($file, function ($line) use ($connection) {

            \DB::connection($connection)->insert("insert into catalogos (
                      ciclo,
id_ramo,
desc_ramo,
id_ur,
desc_ur,
gpo_funcional,
desc_gpo_funcional,
id_funcion,
desc_funcion,
id_subfuncion,
desc_subfuncion,
id_ai,
desc_ai,
id_modalidad,
desc_modalidad,
id_pp,
desc_pp,
id_capitulo,
desc_capitulo,
id_concepto,
desc_concepto,
id_partida_generica,
desc_partida_generica,
id_partida_especifica,
desc_partida_especifica,
id_tipogasto,
desc_tipogasto,
id_ff,
desc_ff,
id_entidad_federativa,
entidad_federativa,
id_clave_cartera,
monto_aprobado
) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [
                $line[Str::upper(Str::slug('CICLO','_'))],
                $line[Str::lower(Str::slug('ID_RAMO','_'))],
                $line[Str::lower(Str::slug('DESC_RAMO','_'))],
                $line[Str::lower(Str::slug('ID_UR','_'))],
                $line[Str::lower(Str::slug('DESC_UR','_'))],
                $line[Str::lower(Str::slug('GPO_FUNCIONAL','_'))],
                $line[Str::lower(Str::slug('DESC_GPO_FUNCIONAL','_'))],
                $line[Str::lower(Str::slug('ID_FUNCION','_'))],
                $line[Str::lower(Str::slug('DESC_FUNCION','_'))],
                $line[Str::lower(Str::slug('ID_SUBFUNCION','_'))],
                $line[Str::lower(Str::slug('DESC_SUBFUNCION','_'))],
                $line[Str::lower(Str::slug('ID_AI','_'))],
                $line[Str::lower(Str::slug('DESC_AI','_'))],
                $line[Str::lower(Str::slug('ID_MODALIDAD','_'))],
                $line[Str::lower(Str::slug('DESC_MODALIDAD','_'))],
                $line[Str::lower(Str::slug('ID_PP','_'))],
                $line[Str::lower(Str::slug('DESC_PP','_'))],
                $line[Str::lower(Str::slug('ID_CAPITULO','_'))],
                $line[Str::lower(Str::slug('DESC_CAPITULO','_'))],
                $line[Str::lower(Str::slug('ID_CONCEPTO','_'))],
                $line[Str::lower(Str::slug('DESC_CONCEPTO','_'))],
                $line[Str::lower(Str::slug('ID_PARTIDA_GENERICA','_'))],
                $line[Str::lower(Str::slug('DESC_PARTIDA_GENERICA','_'))],
                $line[Str::lower(Str::slug('ID_PARTIDA_ESPECIFICA','_'))],
                $line[Str::lower(Str::slug('DESC_PARTIDA_ESPECIFICA','_'))],
                $line[Str::lower(Str::slug('ID_TIPOGASTO','_'))],
                $line[Str::lower(Str::slug('DESC_TIPOGASTO','_'))],
                $line[Str::lower(Str::slug('ID_FF','_'))],
                $line[Str::lower(Str::slug('DESC_FF','_'))],
                $line[Str::lower(Str::slug('ID_ENTIDAD_FEDERATIVA','_'))],
                $line[Str::lower(Str::slug('ENTIDAD_FEDERATIVA','_'))],
                $line[Str::lower(Str::slug('ID_CLAVE_CARTERA','_'))],
                $line[Str::lower(Str::slug('MONTO_APROBADO','_'))],
            ]);
        });
    }
}
