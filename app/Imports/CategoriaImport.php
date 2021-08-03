<?php

namespace App\Imports;

use App\models\Categoria;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CategoriaImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
          Categoria::firstOrCreate([
            'nombre' => strtoupper($row[0]),
          ]);
       }
   }
}