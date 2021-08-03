<?php

namespace App\Imports;

use App\models\Pregunta;
use App\models\Subpregunta;
use App\models\Categoria;
use App\models\Subcategoria;
use App\models\Indice;
use App\models\Informe;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class IndiceImport implements ToCollection
{
	public function collection(Collection $rows)
	{
		foreach ($rows as $row) 
		{
			$informe_string=$row[0];
			$pregunta_string=$row[1];
			$subpregunta_string=$row[2];
			$categoria_string=$row[3];
			$subcategoria_string=$row[4];

			if($informe_string!=''){
				$informe=Informe::where('idinforme',$informe_string)->first();
				if($informe){
					if($categoria_string!=''){	
						$categoria=Categoria::where('nombre',$categoria_string)->first();
						if(!$categoria){
							$categoria=new Categoria();
							$categoria->nombre=strtoupper($categoria_string);
							$categoria->save();
						}
						$idcategoria=$categoria->idcategoria;
					}else{$idcategoria=null;}

					if($subcategoria_string!=''){	
						$subcategoria=Subcategoria::where('nombre',$subcategoria_string)->first();
						if(!$subcategoria){
							$subcategoria=new Subcategoria();
							$subcategoria->nombre=strtoupper($subcategoria_string);
							$subcategoria->idcategoria=$categoria->idcategoria;
							$subcategoria->save();
						}
						$idsubcategoria=$subcategoria->idsubcategoria;
					}else{$idsubcategoria=null;}

					if($pregunta_string!=''){
						$pregunta=Pregunta::where('num_pregunta',$pregunta_string)->where('idinforme',$informe->idinforme)->first();
						if(!$pregunta){
							$pregunta=new Pregunta();
							$pregunta->num_pregunta=$pregunta_string;
							$pregunta->idinforme=$informe->idinforme;
							$pregunta->save();
						}
						$idpregunta=$pregunta->idpregunta;
					}else{$idpregunta=null;}

					if($subpregunta_string!=''){
						$subpregunta=Subpregunta::where('num_subpregunta',$subpregunta_string)->where('idpregunta',$pregunta->idpregunta)->first();
						if(!$subpregunta){
							$subpregunta=new Subpregunta();
							$subpregunta->num_subpregunta=$subpregunta_string;
							$subpregunta->idpregunta=$pregunta->idpregunta;
							$subpregunta->save();
						}
						$idsubpregunta=$subpregunta->idsubpregunta;
					}else{$idsubpregunta=null;}


					Indice::firstOrCreate([
						'idinforme'=>$informe->id,
						'idpregunta' => $idpregunta,
						'idsubpregunta' => $idsubpregunta,
						'idcategoria'=> $idcategoria,
						'idsubcategoria'=> $idsubcategoria,
					]);
				}
			}
		}
	}
}