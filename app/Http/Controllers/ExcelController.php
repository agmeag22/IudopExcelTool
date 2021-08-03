<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IndiceImport;
use App\Imports\InformeImport;
use App\Imports\CategoriaImport;
use App\Imports\SubcategoriaImport;
// use App\Exports\TableImport;

class ExcelController extends Controller
{

 	/**
    * @return \Illuminate\Support\Collection
    */

    public function All()
    {
        return view('all');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileInformeImport(Request $request) 
    {
    	Excel::import(new InformeImport, $request->file('file')->store('temp'));
    	return view('pages')->with('msg', 'Informe');
    }

    public function fileCategoriaImport(Request $request) 
    {
        Excel::import(new CategoriaImport, $request->file('file')->store('temp'));
        return view('pages')->with('msg', 'Categoria');
    }

    public function fileSubcategoriaImport(Request $request) 
    {
        Excel::import(new SubcategoriaImport, $request->file('file')->store('temp'));
        return view('pages')->with('msg', 'Subcategoria');
    }

    public function fileIndiceImport(Request $request) 
    {
        Excel::import(new IndiceImport, $request->file('file')->store('temp'));
        return view('pages')->with('msg', 'Indice');
    }
}
