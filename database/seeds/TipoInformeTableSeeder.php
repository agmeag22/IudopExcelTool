<?php

use Illuminate\Database\Seeder;

class TipoInformeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_informe')->delete();
        
        \DB::table('tipo_informe')->insert(array (
            0 => 
            array (
                'idtipo_informe' => 1,
                'nombre' => 'ENCUESTA SOBRE LA FIRMA DE LOS ACUERDOS DE PAZ',
                'created_at' => '2021-07-02 03:41:13',
                'updated_at' => '2021-07-04 23:40:54',
                'idusuario' => 1,
                'eliminado' => 0,
            ),
            1 => 
            array (
                'idtipo_informe' => 2,
                'nombre' => 'ENCUESTA ESPECIALIZADA',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            2 => 
            array (
                'idtipo_informe' => 3,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1986',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            3 => 
            array (
                'idtipo_informe' => 4,
                'nombre' => 'ENCUESTA PREELECTORAL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            4 => 
            array (
                'idtipo_informe' => 5,
                'nombre' => 'ENCUESTA POSELECTORAL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            5 => 
            array (
                'idtipo_informe' => 6,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1988',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            6 => 
            array (
                'idtipo_informe' => 7,
                'nombre' => 'ENCUESTA PREELECTRORAL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            7 => 
            array (
                'idtipo_informe' => 8,
                'nombre' => 'ENCUESTA SOBRE LAS EXPECTATIVAS HACIA EL NUEVO GOBIERNO',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            8 => 
            array (
                'idtipo_informe' => 9,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 100 DíAS – ALFREDO CRISTIANI',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            9 => 
            array (
                'idtipo_informe' => 10,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – ALFREDO CRISTIANI',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            10 => 
            array (
                'idtipo_informe' => 11,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1990',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            11 => 
            array (
                'idtipo_informe' => 12,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1993',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            12 => 
            array (
                'idtipo_informe' => 13,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – ARMANDO CALDERóN SOL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            13 => 
            array (
                'idtipo_informe' => 14,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1995',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            14 => 
            array (
                'idtipo_informe' => 15,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – ARMANDO CALDERóN SOL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            15 => 
            array (
                'idtipo_informe' => 16,
            'nombre' => 'ENCUESTA ESPECIALIZADA  (ARREGLAR VECTOR DE INFORME)',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            16 => 
            array (
                'idtipo_informe' => 17,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1996',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            17 => 
            array (
                'idtipo_informe' => 18,
                'nombre' => 'ENCUESTA A BOCA DE URNA',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            18 => 
            array (
                'idtipo_informe' => 19,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 3° AñO – ARMANDO CALDERóN SOL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            19 => 
            array (
                'idtipo_informe' => 20,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1997',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            20 => 
            array (
                'idtipo_informe' => 21,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 4° AñO – ARMANDO CALDERóN SOL',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            21 => 
            array (
                'idtipo_informe' => 22,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1998',
                'created_at' => '2021-07-04 21:46:01',
                'updated_at' => '2021-07-04 21:46:01',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            22 => 
            array (
                'idtipo_informe' => 23,
                'nombre' => 'EVALUACIóN ENCUESTA DE GOBIERNO – 5° AñO – ARMANDO CALDERóN SOL',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            23 => 
            array (
                'idtipo_informe' => 24,
                'nombre' => 'EVALUACIóN ENCUESTA DE GOBIERNO – 100 DíAS – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            24 => 
            array (
                'idtipo_informe' => 25,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 1999',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            25 => 
            array (
                'idtipo_informe' => 26,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            26 => 
            array (
                'idtipo_informe' => 27,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2000',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            27 => 
            array (
                'idtipo_informe' => 28,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            28 => 
            array (
                'idtipo_informe' => 29,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2001',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            29 => 
            array (
                'idtipo_informe' => 30,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 3° AñO – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            30 => 
            array (
                'idtipo_informe' => 31,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2002',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            31 => 
            array (
                'idtipo_informe' => 32,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 4° AñO – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            32 => 
            array (
                'idtipo_informe' => 33,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2003',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            33 => 
            array (
                'idtipo_informe' => 34,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 5° AñO – FRANCISCO FLORES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            34 => 
            array (
                'idtipo_informe' => 35,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 100 DíAS – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            35 => 
            array (
                'idtipo_informe' => 36,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2004',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            36 => 
            array (
                'idtipo_informe' => 37,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            37 => 
            array (
                'idtipo_informe' => 38,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2005',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            38 => 
            array (
                'idtipo_informe' => 39,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            39 => 
            array (
                'idtipo_informe' => 40,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2006',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            40 => 
            array (
                'idtipo_informe' => 41,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 3° AñO – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            41 => 
            array (
                'idtipo_informe' => 42,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2007',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            42 => 
            array (
                'idtipo_informe' => 43,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 4° AñO – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            43 => 
            array (
                'idtipo_informe' => 44,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2008',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            44 => 
            array (
                'idtipo_informe' => 45,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 5° AñO – ELíAS ANTONIO SACA',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            45 => 
            array (
                'idtipo_informe' => 46,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 100 DíAS – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            46 => 
            array (
                'idtipo_informe' => 47,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2009',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            47 => 
            array (
                'idtipo_informe' => 48,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            48 => 
            array (
                'idtipo_informe' => 49,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2010',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            49 => 
            array (
                'idtipo_informe' => 50,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            50 => 
            array (
                'idtipo_informe' => 51,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2011',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            51 => 
            array (
                'idtipo_informe' => 52,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 3° AñO – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            52 => 
            array (
                'idtipo_informe' => 53,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2012',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            53 => 
            array (
                'idtipo_informe' => 54,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 4° AñO – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            54 => 
            array (
                'idtipo_informe' => 55,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2013',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            55 => 
            array (
                'idtipo_informe' => 56,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 5° AñO – MAURICIO FUNES',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            56 => 
            array (
                'idtipo_informe' => 57,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2014',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            57 => 
            array (
                'idtipo_informe' => 58,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2015',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            58 => 
            array (
                'idtipo_informe' => 59,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – SALVADOR SáNCHEZ CERéN',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            59 => 
            array (
                'idtipo_informe' => 60,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2016',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            60 => 
            array (
                'idtipo_informe' => 61,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 3° AñO – SALVADOR SáNCHEZ CERéN',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            61 => 
            array (
                'idtipo_informe' => 62,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2017',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            62 => 
            array (
                'idtipo_informe' => 63,
            'nombre' => 'ENCUESTA SOBRE EL PROCESO ELECTORAL (NO SE SI DEBE DE SER EL DE ENCUESTA A BOCA DE URNA)',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            63 => 
            array (
                'idtipo_informe' => 64,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 4° AñO – SALVADOR SáNCHEZ CERéN',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            64 => 
            array (
                'idtipo_informe' => 65,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2018',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            65 => 
            array (
                'idtipo_informe' => 66,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 5° AñO – SALVADOR SáNCHEZ CERéN',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            66 => 
            array (
                'idtipo_informe' => 67,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 100 DIAS – NAYIB BUKELE',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            67 => 
            array (
                'idtipo_informe' => 68,
                'nombre' => 'ENCUESTA DE EVALUACIóN DE AñO 2019',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            68 => 
            array (
                'idtipo_informe' => 69,
                'nombre' => 'SONDEO ESPECIALIZADO',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            69 => 
            array (
                'idtipo_informe' => 70,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 1° AñO – NAYIB BUKELE',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            70 => 
            array (
                'idtipo_informe' => 71,
                'nombre' => 'ENCUESTA PREELECTORAL MUNICIPAL',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            71 => 
            array (
                'idtipo_informe' => 72,
                'nombre' => 'EVALUACIóN DE AñO 2020',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
            72 => 
            array (
                'idtipo_informe' => 73,
                'nombre' => 'EVALUACIóN DE GOBIERNO – 2° AñO – NAYIB BUKELE',
                'created_at' => '2021-07-04 21:46:02',
                'updated_at' => '2021-07-04 21:46:02',
                'idusuario' => 0,
                'eliminado' => 0,
            ),
        ));
        
        
    }
}