<?php

namespace App\Imports;

use App\models\Informe;
use App\models\TipoInforme;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;

class InformeImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $idinforme = $row[0];
            $tipo_informe_string = $row[1];
            $titulo = $row[2];
            $url_informe = $row[3];
            $fecha_inicio = $row[4];
            $fecha_fin = $row[5];

            if ($tipo_informe_string != '') {
                $tipo_informe = TipoInforme::where('nombre', $tipo_informe_string)->first();
                if (!$tipo_informe) {
                    $tipo_informe = new TipoInforme();
                    $tipo_informe->nombre = strtoupper($tipo_informe_string);
                    $tipo_informe->save();
                }
                $idtipo_informe = $tipo_informe->idtipo_informe;
            } else {
                $idtipo_informe = null;
            }
            Informe::firstOrCreate([
                'idinforme' => $idinforme,
                'titulo' => $titulo,
                'fecha_inicio' => Carbon::parse($fecha_inicio)->format('Y-m-d'),
                'fecha_fin' => Carbon::parse($fecha_fin)->format('Y-m-d'),
                'url_informe' => $url_informe,
                'tipo_informe' => $idtipo_informe,
            ]);
        }
    }
}
