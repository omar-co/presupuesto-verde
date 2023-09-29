<?php

namespace App\Services;

use App\Jobs\CatalogoExport;
use App\Models\Export;
use App\Settings\Calendario;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class ExportService {

    public static function catalogo(): void {

        $export = self::createExport();
        CatalogoExport::dispatch($export);
        self::sendNotification();
    }


    private static function sendNotification(): void {
        Notification::make()
            ->title('Exportación en progreso')
            ->success()
            ->icon('heroicon-o-document-download')
            ->seconds(20)
            ->body('Su solicitud de exportación se está procesando actualmente en segundo plano.
                            Una vez haya finalizado podrá descargar el archivo desde <strong>Gestión de archivos -> Descargas.</strong>.
                            Esto suele tomar unos minutos.')
            ->actions([
                Action::make('Ir a Descargas')
                    ->button()
                    ->url(route('filament.resources.exports.index'))
    ])
            ->send();
    }


    private static function createExport() {
        return Export::create([
            'user_id' => auth()->id(),
            'ciclo' => app(Calendario::class)->ejercicio_fiscal,
            'type' => 'Programas presupuestarios',
        ]);
    }

}
