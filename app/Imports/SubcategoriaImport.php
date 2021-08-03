<?php

namespace App\Imports;

use App\models\Categoria;
use App\models\Subcategoria;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SubcategoriaImport implements ToCollection
{
	public function collection(Collection $rows)
	{
		foreach ($rows as $row) 
		{
			$categoria=null;
			$categoria=Categoria::where('nombre',$row[0])->first();
			if(!$categoria){
				$categoria=new Categoria();
				$categoria->nombre=strtoupper($row[0]);
				$categoria->save();
			}
			Subcategoria::firstOrCreate([
				'idcategoria'=> $categoria->idcategoria,
				'nombre' => strtoupper($row[1]),
			]);
		}
	}
}