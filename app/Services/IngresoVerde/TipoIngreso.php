<?php

namespace App\Services\IngresoVerde;

enum TipoIngreso: string
{
    case IngresosOrdinarios = 'ordinarios';
    case IngresosExtraordinarios = 'extraordinarios';


    public function options(): array
    {
        return match ($this) {
            self::IngresosOrdinarios => $this->ingresosOrdinarios(),
            self::IngresosExtraordinarios => $this->ingresosExtraordinarios(),
        };
    }

    public static function levelTwo(int|null $parent): array|bool
    {
        return match ($parent) {
            1 => [1 => '1.A Impuestos directos', 2 => '1.B Impuestos Indirectos'],
            2 => [3 => '2.A Derechos', 4 => '2.B Productos', 5 => '2.C Aprovechamiento'],
            3 => [6 => '3.A Ventas de bienes', 7 => '3.B Venta de servicios'],
            6 => [8 => '2.A Externos', 9 => '2.B Internos'],
            default => false
        };
    }

    private function ingresosOrdinarios(): array
    {
        return [
            1 => 'Recaudación tributaria',
            2 => 'Recaudación no tributaria',
            3 => 'Ingreso de organismos y empresas paraestatales',
        ];
    }

    private function ingresosExtraordinarios(): array
    {
        return [
            5 => 'Enajenación de bienes nacionales',
            6 => 'Contratación de créditod (empréstitos)',
            7 => 'Emisión de moneda por parte del banco de México',
        ];
    }


}
