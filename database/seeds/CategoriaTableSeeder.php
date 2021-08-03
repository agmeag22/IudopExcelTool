<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categoria')->delete();
        
        \DB::table('categoria')->insert(array (
            0 => 
            array (
                'idcategoria' => 1,
                'nombre' => 'ABORTO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:29',
                'updated_at' => '2021-07-07 05:03:29',
            ),
            1 => 
            array (
                'idcategoria' => 2,
                'nombre' => 'ACUERDOS DE PAZ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:29',
                'updated_at' => '2021-07-07 05:03:29',
            ),
            2 => 
            array (
                'idcategoria' => 3,
                'nombre' => 'AGENCIAS INTERNACIONALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:31',
                'updated_at' => '2021-07-07 05:03:31',
            ),
            3 => 
            array (
                'idcategoria' => 4,
                'nombre' => 'AGUA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:31',
                'updated_at' => '2021-07-07 05:03:31',
            ),
            4 => 
            array (
                'idcategoria' => 5,
                'nombre' => 'ALCALDÍA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:31',
                'updated_at' => '2021-07-07 05:03:31',
            ),
            5 => 
            array (
                'idcategoria' => 6,
                'nombre' => 'ALCOHOL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:35',
                'updated_at' => '2021-07-07 05:03:35',
            ),
            6 => 
            array (
                'idcategoria' => 7,
                'nombre' => 'ANILLO PERIFÉRICO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:35',
                'updated_at' => '2021-07-07 05:03:35',
            ),
            7 => 
            array (
                'idcategoria' => 8,
            'nombre' => 'ARENA (ALIANZA REPUBLICANA NACIONALISTA)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:35',
                'updated_at' => '2021-07-07 05:03:35',
            ),
            8 => 
            array (
                'idcategoria' => 9,
                'nombre' => 'ARMAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:37',
                'updated_at' => '2021-07-07 05:03:37',
            ),
            9 => 
            array (
                'idcategoria' => 10,
                'nombre' => 'ASAMBLEA LEGISLATIVA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:38',
                'updated_at' => '2021-07-07 05:03:38',
            ),
            10 => 
            array (
                'idcategoria' => 11,
                'nombre' => 'AUTORITARISMO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:43',
                'updated_at' => '2021-07-07 05:03:43',
            ),
            11 => 
            array (
                'idcategoria' => 12,
                'nombre' => 'ÁVILA, RODRIGO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:44',
                'updated_at' => '2021-07-07 05:03:44',
            ),
            12 => 
            array (
                'idcategoria' => 13,
                'nombre' => 'BARRERA , HUGO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:44',
                'updated_at' => '2021-07-07 05:03:44',
            ),
            13 => 
            array (
                'idcategoria' => 14,
                'nombre' => 'CALDERÓN SOL, ARMANDO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:44',
                'updated_at' => '2021-07-07 05:03:44',
            ),
            14 => 
            array (
                'idcategoria' => 15,
                'nombre' => 'CARDENAL, LUIS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            15 => 
            array (
                'idcategoria' => 16,
                'nombre' => 'CASO JESUITAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            16 => 
            array (
                'idcategoria' => 17,
            'nombre' => 'CDU (CENTRO DEMOCRÁTICO UNIDO)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            17 => 
            array (
                'idcategoria' => 18,
                'nombre' => 'CHÁVEZ MENA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            18 => 
            array (
                'idcategoria' => 19,
                'nombre' => 'CIENCIA Y TECNOLOGÍA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            19 => 
            array (
                'idcategoria' => 20,
                'nombre' => 'COALICIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            20 => 
            array (
                'idcategoria' => 21,
                'nombre' => 'COEN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            21 => 
            array (
                'idcategoria' => 22,
                'nombre' => 'COMERCIO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            22 => 
            array (
                'idcategoria' => 23,
                'nombre' => 'COMISIÓN DE LA VERDAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            23 => 
            array (
                'idcategoria' => 24,
                'nombre' => 'CONASOL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            24 => 
            array (
                'idcategoria' => 25,
            'nombre' => 'CONCERTACIÓN (DIALOGO)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:45',
                'updated_at' => '2021-07-07 05:03:45',
            ),
            25 => 
            array (
                'idcategoria' => 26,
                'nombre' => 'CONDONACIÓN DEUDA AGRARIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:46',
                'updated_at' => '2021-07-07 05:03:46',
            ),
            26 => 
            array (
                'idcategoria' => 27,
                'nombre' => 'CONFLICTOS LABORALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:46',
                'updated_at' => '2021-07-07 05:03:46',
            ),
            27 => 
            array (
                'idcategoria' => 28,
                'nombre' => 'CONFORMISMO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:46',
                'updated_at' => '2021-07-07 05:03:46',
            ),
            28 => 
            array (
                'idcategoria' => 29,
                'nombre' => 'CONSTITUCIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:46',
                'updated_at' => '2021-07-07 05:03:46',
            ),
            29 => 
            array (
                'idcategoria' => 30,
                'nombre' => 'COPAZ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:47',
                'updated_at' => '2021-07-07 05:03:47',
            ),
            30 => 
            array (
                'idcategoria' => 31,
                'nombre' => 'CORRUPCIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:47',
                'updated_at' => '2021-07-07 05:03:47',
            ),
            31 => 
            array (
                'idcategoria' => 32,
                'nombre' => 'CORTE DE CUENTAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:48',
                'updated_at' => '2021-07-07 05:03:48',
            ),
            32 => 
            array (
                'idcategoria' => 33,
                'nombre' => 'CORTE INTERNACIONAL DE JUSTICIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:48',
                'updated_at' => '2021-07-07 05:03:48',
            ),
            33 => 
            array (
                'idcategoria' => 34,
                'nombre' => 'CORTE SUPREMA DE JUSTICIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:48',
                'updated_at' => '2021-07-07 05:03:48',
            ),
            34 => 
            array (
                'idcategoria' => 35,
                'nombre' => 'CONSERVADURISMO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            35 => 
            array (
                'idcategoria' => 36,
                'nombre' => 'CRIMEN ORGANIZADO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            36 => 
            array (
                'idcategoria' => 37,
                'nombre' => 'CRISTIANI, ALFREDO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            37 => 
            array (
                'idcategoria' => 38,
                'nombre' => 'CUERPOS DE SEGURIDAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            38 => 
            array (
                'idcategoria' => 39,
                'nombre' => 'CUERPOS DE SOCORRO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            39 => 
            array (
                'idcategoria' => 40,
                'nombre' => 'INTERÉS POLÍTICO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:49',
                'updated_at' => '2021-07-07 05:03:49',
            ),
            40 => 
            array (
                'idcategoria' => 41,
                'nombre' => 'DE CARRILLO, BEATRICE',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:51',
                'updated_at' => '2021-07-07 05:03:51',
            ),
            41 => 
            array (
                'idcategoria' => 42,
                'nombre' => 'DEFENSAS CIVILES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:51',
                'updated_at' => '2021-07-07 05:03:51',
            ),
            42 => 
            array (
                'idcategoria' => 43,
                'nombre' => 'DELINCUENCIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:51',
                'updated_at' => '2021-07-07 05:03:51',
            ),
            43 => 
            array (
                'idcategoria' => 44,
                'nombre' => 'DEMOCRACIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:57',
                'updated_at' => '2021-07-07 05:03:57',
            ),
            44 => 
            array (
                'idcategoria' => 45,
                'nombre' => 'DERECHOS HUMANOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:58',
                'updated_at' => '2021-07-07 05:03:58',
            ),
            45 => 
            array (
                'idcategoria' => 46,
                'nombre' => 'DERECHOS LABORALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:00',
                'updated_at' => '2021-07-07 05:04:00',
            ),
            46 => 
            array (
                'idcategoria' => 47,
                'nombre' => 'DESASTRES NATURALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:00',
                'updated_at' => '2021-07-07 05:04:00',
            ),
            47 => 
            array (
                'idcategoria' => 48,
                'nombre' => 'DROGAS / TABACO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:02',
                'updated_at' => '2021-07-07 05:04:02',
            ),
            48 => 
            array (
                'idcategoria' => 49,
            'nombre' => 'DOCUMENTO ÚNICO DE IDENTIDAD (DUI)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:02',
                'updated_at' => '2021-07-07 05:04:02',
            ),
            49 => 
            array (
                'idcategoria' => 50,
                'nombre' => 'ECONOMÍA / SITUACIÓN ECONÓMICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:02',
                'updated_at' => '2021-07-07 05:04:02',
            ),
            50 => 
            array (
                'idcategoria' => 51,
                'nombre' => 'ECONOMÍA FAMILIAR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:06',
                'updated_at' => '2021-07-07 05:04:06',
            ),
            51 => 
            array (
                'idcategoria' => 52,
                'nombre' => 'EDUCACIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:08',
                'updated_at' => '2021-07-07 05:04:08',
            ),
            52 => 
            array (
                'idcategoria' => 53,
                'nombre' => 'ELECCIONES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:10',
                'updated_at' => '2021-07-07 05:04:10',
            ),
            53 => 
            array (
                'idcategoria' => 54,
                'nombre' => 'EMPLEO ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:23',
                'updated_at' => '2021-07-07 05:04:23',
            ),
            54 => 
            array (
                'idcategoria' => 55,
                'nombre' => 'EMPRESA ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:23',
                'updated_at' => '2021-07-07 05:04:23',
            ),
            55 => 
            array (
                'idcategoria' => 56,
                'nombre' => 'EMPRESARIOS ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:23',
                'updated_at' => '2021-07-07 05:04:23',
            ),
            56 => 
            array (
                'idcategoria' => 57,
                'nombre' => 'ENCUESTAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:24',
                'updated_at' => '2021-07-07 05:04:24',
            ),
            57 => 
            array (
                'idcategoria' => 58,
                'nombre' => 'EQUIPAMIENTO DE HOGAR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:24',
                'updated_at' => '2021-07-07 05:04:24',
            ),
            58 => 
            array (
                'idcategoria' => 59,
                'nombre' => 'ESCUADRONES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:24',
                'updated_at' => '2021-07-07 05:04:24',
            ),
            59 => 
            array (
                'idcategoria' => 60,
                'nombre' => 'ESTADO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:24',
                'updated_at' => '2021-07-07 05:04:24',
            ),
            60 => 
            array (
                'idcategoria' => 61,
                'nombre' => 'ESTADOS UNIDOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:24',
                'updated_at' => '2021-07-07 05:04:24',
            ),
            61 => 
            array (
                'idcategoria' => 62,
                'nombre' => 'FAMILIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:25',
                'updated_at' => '2021-07-07 05:04:25',
            ),
            62 => 
            array (
                'idcategoria' => 63,
                'nombre' => 'FESPAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:25',
                'updated_at' => '2021-07-07 05:04:25',
            ),
            63 => 
            array (
                'idcategoria' => 64,
                'nombre' => 'FIGURAS POLÍTICAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:25',
                'updated_at' => '2021-07-07 05:04:25',
            ),
            64 => 
            array (
                'idcategoria' => 65,
                'nombre' => 'FISCALÍA GENERAL DE LA REPÚBLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:27',
                'updated_at' => '2021-07-07 05:04:27',
            ),
            65 => 
            array (
                'idcategoria' => 66,
                'nombre' => 'FLORES, FRANCISCO ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:28',
                'updated_at' => '2021-07-07 05:04:28',
            ),
            66 => 
            array (
                'idcategoria' => 67,
                'nombre' => 'FMLN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:28',
                'updated_at' => '2021-07-07 05:04:28',
            ),
            67 => 
            array (
                'idcategoria' => 68,
            'nombre' => 'FONDO VIAL(FOVIAL)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:31',
                'updated_at' => '2021-07-07 05:04:31',
            ),
            68 => 
            array (
                'idcategoria' => 69,
                'nombre' => 'FUERZA ARMADA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:31',
                'updated_at' => '2021-07-07 05:04:31',
            ),
            69 => 
            array (
                'idcategoria' => 70,
                'nombre' => 'FUNES, MAURICIO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:32',
                'updated_at' => '2021-07-07 05:04:32',
            ),
            70 => 
            array (
                'idcategoria' => 71,
                'nombre' => 'GANA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:33',
                'updated_at' => '2021-07-07 05:04:33',
            ),
            71 => 
            array (
                'idcategoria' => 72,
                'nombre' => 'GÉNERO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:33',
                'updated_at' => '2021-07-07 05:04:33',
            ),
            72 => 
            array (
                'idcategoria' => 73,
                'nombre' => 'GOBIERNO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:34',
                'updated_at' => '2021-07-07 05:04:34',
            ),
            73 => 
            array (
                'idcategoria' => 74,
                'nombre' => 'GUERRA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            74 => 
            array (
                'idcategoria' => 75,
                'nombre' => 'GRUPOS ILEGALES ARMADOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            75 => 
            array (
                'idcategoria' => 76,
                'nombre' => 'HÁNDAL, SCHAFIK',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            76 => 
            array (
                'idcategoria' => 77,
                'nombre' => 'IDENTIDAD SALVADOREÑA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            77 => 
            array (
                'idcategoria' => 78,
                'nombre' => 'IDEOLOGÍA CAPITALISTA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:52',
                'updated_at' => '2021-07-07 05:04:52',
            ),
            78 => 
            array (
                'idcategoria' => 79,
                'nombre' => 'IGLESIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:52',
                'updated_at' => '2021-07-07 05:04:52',
            ),
            79 => 
            array (
                'idcategoria' => 80,
                'nombre' => 'IGLESIA CATÓLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:52',
                'updated_at' => '2021-07-07 05:04:52',
            ),
            80 => 
            array (
                'idcategoria' => 81,
                'nombre' => 'IGLESIA EVANGÉLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            81 => 
            array (
                'idcategoria' => 82,
                'nombre' => 'IMPUESTOS / SUBSIDIOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            82 => 
            array (
                'idcategoria' => 83,
                'nombre' => 'IMPUNIDAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            83 => 
            array (
                'idcategoria' => 84,
                'nombre' => 'INDUSTRIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            84 => 
            array (
                'idcategoria' => 85,
                'nombre' => 'INTEGRACIÓN CENTROAMERICANA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            85 => 
            array (
                'idcategoria' => 86,
                'nombre' => 'ISSS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:54',
                'updated_at' => '2021-07-07 05:04:54',
            ),
            86 => 
            array (
                'idcategoria' => 87,
                'nombre' => 'JACIR DE LOVO, EVELYN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:54',
                'updated_at' => '2021-07-07 05:04:54',
            ),
            87 => 
            array (
                'idcategoria' => 88,
                'nombre' => 'JUEGOS CENTROAMERICANOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:54',
                'updated_at' => '2021-07-07 05:04:54',
            ),
            88 => 
            array (
                'idcategoria' => 89,
                'nombre' => 'JUSTICIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:54',
                'updated_at' => '2021-07-07 05:04:54',
            ),
            89 => 
            array (
                'idcategoria' => 90,
                'nombre' => 'JUZGADOS, JUECES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:55',
                'updated_at' => '2021-07-07 05:04:55',
            ),
            90 => 
            array (
                'idcategoria' => 91,
                'nombre' => 'LEYES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:55',
                'updated_at' => '2021-07-07 05:04:55',
            ),
            91 => 
            array (
                'idcategoria' => 92,
                'nombre' => 'LIBERTAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:56',
                'updated_at' => '2021-07-07 05:04:56',
            ),
            92 => 
            array (
                'idcategoria' => 93,
                'nombre' => 'MACHISMO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:57',
                'updated_at' => '2021-07-07 05:04:57',
            ),
            93 => 
            array (
                'idcategoria' => 94,
                'nombre' => 'MACHUCA, RAFAÉL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:57',
                'updated_at' => '2021-07-07 05:04:57',
            ),
            94 => 
            array (
                'idcategoria' => 95,
                'nombre' => 'MANIFESTACIONES HUELGAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:57',
                'updated_at' => '2021-07-07 05:04:57',
            ),
            95 => 
            array (
                'idcategoria' => 96,
                'nombre' => 'MAQUILAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:57',
                'updated_at' => '2021-07-07 05:04:57',
            ),
            96 => 
            array (
                'idcategoria' => 97,
                'nombre' => 'MARAS / PANDILLAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:58',
                'updated_at' => '2021-07-07 05:04:58',
            ),
            97 => 
            array (
                'idcategoria' => 98,
                'nombre' => 'MEDIO AMBIENTE',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:59',
                'updated_at' => '2021-07-07 05:04:59',
            ),
            98 => 
            array (
                'idcategoria' => 99,
                'nombre' => 'MEDIOS DE COMUNICACIÓN SOCIAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:59',
                'updated_at' => '2021-07-07 05:04:59',
            ),
            99 => 
            array (
                'idcategoria' => 100,
                'nombre' => 'MENJIVAR VIOLETA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:03',
                'updated_at' => '2021-07-07 05:05:03',
            ),
            100 => 
            array (
                'idcategoria' => 101,
                'nombre' => 'MIGRACIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:03',
                'updated_at' => '2021-07-07 05:05:03',
            ),
            101 => 
            array (
                'idcategoria' => 102,
                'nombre' => 'MINERÍA / MINERÍA METÉLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:04',
                'updated_at' => '2021-07-07 05:05:04',
            ),
            102 => 
            array (
                'idcategoria' => 103,
                'nombre' => 'MINISTERIOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            103 => 
            array (
                'idcategoria' => 104,
                'nombre' => 'MORAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            104 => 
            array (
                'idcategoria' => 105,
            'nombre' => 'MR (MOVIMIENTO RENOVADOR)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            105 => 
            array (
                'idcategoria' => 106,
                'nombre' => 'MOVIMIENTO UNIDAD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            106 => 
            array (
                'idcategoria' => 107,
                'nombre' => 'MUJER',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            107 => 
            array (
                'idcategoria' => 108,
                'nombre' => 'NACIONES UNIDAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:11',
                'updated_at' => '2021-07-07 05:05:11',
            ),
            108 => 
            array (
                'idcategoria' => 109,
                'nombre' => 'NARCOTRÁFICO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:11',
                'updated_at' => '2021-07-07 05:05:11',
            ),
            109 => 
            array (
                'idcategoria' => 110,
                'nombre' => 'ONG’S',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:11',
                'updated_at' => '2021-07-07 05:05:11',
            ),
            110 => 
            array (
                'idcategoria' => 111,
                'nombre' => 'ORTIZ, OSCAR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:12',
                'updated_at' => '2021-07-07 05:05:12',
            ),
            111 => 
            array (
                'idcategoria' => 112,
                'nombre' => 'PARTICIPACIÓN CIUDADANA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:12',
                'updated_at' => '2021-07-07 05:05:12',
            ),
            112 => 
            array (
                'idcategoria' => 113,
                'nombre' => 'PARTICIPACIÓN POLÍTICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:13',
                'updated_at' => '2021-07-07 05:05:13',
            ),
            113 => 
            array (
                'idcategoria' => 114,
                'nombre' => 'PARTIDOS POLÍTICOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:15',
                'updated_at' => '2021-07-07 05:05:15',
            ),
            114 => 
            array (
                'idcategoria' => 115,
                'nombre' => 'PARTIDO QUE GANARÁ LAS ELECCIONES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:18',
                'updated_at' => '2021-07-07 05:05:18',
            ),
            115 => 
            array (
                'idcategoria' => 116,
            'nombre' => 'PCN (PARTIDO CONCILIACIóN NACIONAL)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:19',
                'updated_at' => '2021-07-07 05:05:19',
            ),
            116 => 
            array (
                'idcategoria' => 117,
            'nombre' => 'PDC (PARTIDO DEMóCRATA CRISTIANO)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:19',
                'updated_at' => '2021-07-07 05:05:19',
            ),
            117 => 
            array (
                'idcategoria' => 118,
            'nombre' => 'PDDH ( PROCURADURíA DE DERECHOS HUMANOS)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:19',
                'updated_at' => '2021-07-07 05:05:19',
            ),
            118 => 
            array (
                'idcategoria' => 119,
                'nombre' => 'PENA DE MUERTE',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:21',
                'updated_at' => '2021-07-07 05:05:21',
            ),
            119 => 
            array (
                'idcategoria' => 120,
                'nombre' => 'PLAN MANO DURA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:21',
                'updated_at' => '2021-07-07 05:05:21',
            ),
            120 => 
            array (
                'idcategoria' => 121,
                'nombre' => 'PLAN DE NACIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:22',
                'updated_at' => '2021-07-07 05:05:22',
            ),
            121 => 
            array (
                'idcategoria' => 122,
            'nombre' => 'PM (POLICíA MUNICIPAL)(CAM)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:22',
                'updated_at' => '2021-07-07 05:05:22',
            ),
            122 => 
            array (
                'idcategoria' => 123,
            'nombre' => 'PN (POLICíA NACIONAL)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:22',
                'updated_at' => '2021-07-07 05:05:22',
            ),
            123 => 
            array (
                'idcategoria' => 124,
            'nombre' => 'PNC (POLICíA NACIONAL CIVIL)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:22',
                'updated_at' => '2021-07-07 05:05:22',
            ),
            124 => 
            array (
                'idcategoria' => 125,
                'nombre' => 'POBREZA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:24',
                'updated_at' => '2021-07-07 05:05:24',
            ),
            125 => 
            array (
                'idcategoria' => 126,
                'nombre' => 'POLÍTICOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:25',
                'updated_at' => '2021-07-07 05:05:25',
            ),
            126 => 
            array (
                'idcategoria' => 127,
                'nombre' => 'PREFERENCIA POLÍTICO-PARTIDISTA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:25',
                'updated_at' => '2021-07-07 05:05:25',
            ),
            127 => 
            array (
                'idcategoria' => 128,
                'nombre' => 'PRESIDENTE',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:30',
                'updated_at' => '2021-07-07 05:05:30',
            ),
            128 => 
            array (
                'idcategoria' => 129,
                'nombre' => 'PRESUPUESTO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:30',
                'updated_at' => '2021-07-07 05:05:30',
            ),
            129 => 
            array (
                'idcategoria' => 130,
                'nombre' => 'PRINCIPAL PROBLEMA DE EL SALVADOR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:30',
                'updated_at' => '2021-07-07 05:05:30',
            ),
            130 => 
            array (
                'idcategoria' => 131,
                'nombre' => 'PRIVATIZACIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:32',
                'updated_at' => '2021-07-07 05:05:32',
            ),
            131 => 
            array (
                'idcategoria' => 132,
                'nombre' => 'PROBLEMAS DE EL SALVADOR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:32',
                'updated_at' => '2021-07-07 05:05:32',
            ),
            132 => 
            array (
                'idcategoria' => 133,
                'nombre' => 'PROCURADURÍA GENERAL DE LA REPÚBLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:32',
                'updated_at' => '2021-07-07 05:05:32',
            ),
            133 => 
            array (
                'idcategoria' => 134,
                'nombre' => 'RECURSOS NATURALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:33',
                'updated_at' => '2021-07-07 05:05:33',
            ),
            134 => 
            array (
                'idcategoria' => 135,
            'nombre' => 'REFORMA AGRARIA (TIERRAS)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:33',
                'updated_at' => '2021-07-07 05:05:33',
            ),
            135 => 
            array (
                'idcategoria' => 136,
                'nombre' => 'REFORMA EDUCATIVA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:33',
                'updated_at' => '2021-07-07 05:05:33',
            ),
            136 => 
            array (
                'idcategoria' => 137,
                'nombre' => 'RELACIONES EXTERIORES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:33',
                'updated_at' => '2021-07-07 05:05:33',
            ),
            137 => 
            array (
                'idcategoria' => 138,
                'nombre' => 'RELACIÓN SOCIEDAD Y GOBIERNOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:33',
                'updated_at' => '2021-07-07 05:05:33',
            ),
            138 => 
            array (
                'idcategoria' => 139,
                'nombre' => 'RELACIONES HUMANAS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:34',
                'updated_at' => '2021-07-07 05:05:34',
            ),
            139 => 
            array (
                'idcategoria' => 140,
                'nombre' => 'RELIGIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:34',
                'updated_at' => '2021-07-07 05:05:34',
            ),
            140 => 
            array (
                'idcategoria' => 141,
                'nombre' => 'REPRESENTACIÓN POLÍTICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:37',
                'updated_at' => '2021-07-07 05:05:37',
            ),
            141 => 
            array (
                'idcategoria' => 142,
                'nombre' => 'RIVAS ZAMORA, CARLOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:38',
                'updated_at' => '2021-07-07 05:05:38',
            ),
            142 => 
            array (
                'idcategoria' => 143,
                'nombre' => 'ROMERO, MONSEÑOR OSCAR ARNULFO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:38',
                'updated_at' => '2021-07-07 05:05:38',
            ),
            143 => 
            array (
                'idcategoria' => 144,
                'nombre' => 'SACA, ELÍAS ANTONIO ',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:38',
                'updated_at' => '2021-07-07 05:05:38',
            ),
            144 => 
            array (
                'idcategoria' => 145,
                'nombre' => 'SAENZ LACALLE, FERNANDO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:38',
                'updated_at' => '2021-07-07 05:05:38',
            ),
            145 => 
            array (
                'idcategoria' => 146,
                'nombre' => 'SALUD',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:38',
                'updated_at' => '2021-07-07 05:05:38',
            ),
            146 => 
            array (
                'idcategoria' => 147,
                'nombre' => 'SÁNCHEZ CERÉN, SALVADOR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:40',
                'updated_at' => '2021-07-07 05:05:40',
            ),
            147 => 
            array (
                'idcategoria' => 148,
                'nombre' => 'SECTOR AGRÍCOLA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:40',
                'updated_at' => '2021-07-07 05:05:40',
            ),
            148 => 
            array (
                'idcategoria' => 149,
                'nombre' => 'SECUESTROS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:40',
                'updated_at' => '2021-07-07 05:05:40',
            ),
            149 => 
            array (
                'idcategoria' => 150,
                'nombre' => 'SEGURIDAD PÚBLICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:40',
                'updated_at' => '2021-07-07 05:05:40',
            ),
            150 => 
            array (
                'idcategoria' => 151,
                'nombre' => 'SERVICIOS BÁSICOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:41',
                'updated_at' => '2021-07-07 05:05:41',
            ),
            151 => 
            array (
                'idcategoria' => 152,
                'nombre' => 'SERVICIOS PÚBLICOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:41',
                'updated_at' => '2021-07-07 05:05:41',
            ),
            152 => 
            array (
                'idcategoria' => 153,
                'nombre' => 'SERVICIOS SOCIALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:41',
                'updated_at' => '2021-07-07 05:05:41',
            ),
            153 => 
            array (
                'idcategoria' => 154,
                'nombre' => 'SILVA, HÉCTOR',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:41',
                'updated_at' => '2021-07-07 05:05:41',
            ),
            154 => 
            array (
                'idcategoria' => 155,
                'nombre' => 'SINDICATOS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:42',
                'updated_at' => '2021-07-07 05:05:42',
            ),
            155 => 
            array (
                'idcategoria' => 156,
                'nombre' => 'SISTEMA DE JUSTICIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:42',
                'updated_at' => '2021-07-07 05:05:42',
            ),
            156 => 
            array (
                'idcategoria' => 157,
                'nombre' => 'SISTEMA FINANCIERO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:43',
                'updated_at' => '2021-07-07 05:05:43',
            ),
            157 => 
            array (
                'idcategoria' => 158,
            'nombre' => 'SISTEMA PENITENCIARIO (CÁRCELES) / CENTROS PENALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:43',
                'updated_at' => '2021-07-07 05:05:43',
            ),
            158 => 
            array (
                'idcategoria' => 159,
                'nombre' => 'SISTEMA POLÍTICO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:43',
                'updated_at' => '2021-07-07 05:05:43',
            ),
            159 => 
            array (
                'idcategoria' => 160,
                'nombre' => 'SISTEMA SOCIAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:43',
                'updated_at' => '2021-07-07 05:05:43',
            ),
            160 => 
            array (
                'idcategoria' => 161,
                'nombre' => 'SITUACIÓN GENERAL DEL PAÍS',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:44',
                'updated_at' => '2021-07-07 05:05:44',
            ),
            161 => 
            array (
                'idcategoria' => 162,
                'nombre' => 'SITUACIÓN LABORAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:46',
                'updated_at' => '2021-07-07 05:05:46',
            ),
            162 => 
            array (
                'idcategoria' => 163,
                'nombre' => 'SITUACIÓN PERSONAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:48',
                'updated_at' => '2021-07-07 05:05:48',
            ),
            163 => 
            array (
                'idcategoria' => 164,
                'nombre' => 'SITUACIÓN POLÍTICA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:49',
                'updated_at' => '2021-07-07 05:05:49',
            ),
            164 => 
            array (
                'idcategoria' => 165,
                'nombre' => 'TERRORISMO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:49',
                'updated_at' => '2021-07-07 05:05:49',
            ),
            165 => 
            array (
                'idcategoria' => 166,
                'nombre' => 'TOLERANCIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:49',
                'updated_at' => '2021-07-07 05:05:49',
            ),
            166 => 
            array (
                'idcategoria' => 167,
                'nombre' => 'TRANSPORTE PÚBLICO',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:49',
                'updated_at' => '2021-07-07 05:05:49',
            ),
            167 => 
            array (
                'idcategoria' => 168,
            'nombre' => 'TRATADOS DE LIBRE COMERCIO (TLC)',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:50',
                'updated_at' => '2021-07-07 05:05:50',
            ),
            168 => 
            array (
                'idcategoria' => 169,
                'nombre' => 'TRIBUNAL SUPREMO ELECTORAL',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:50',
                'updated_at' => '2021-07-07 05:05:50',
            ),
            169 => 
            array (
                'idcategoria' => 170,
                'nombre' => 'UCA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:51',
                'updated_at' => '2021-07-07 05:05:51',
            ),
            170 => 
            array (
                'idcategoria' => 171,
                'nombre' => 'VALORES INTERNACIONALES',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:51',
                'updated_at' => '2021-07-07 05:05:51',
            ),
            171 => 
            array (
                'idcategoria' => 172,
                'nombre' => 'VICEMINISTERIO DE TRANSPORTE',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:51',
                'updated_at' => '2021-07-07 05:05:51',
            ),
            172 => 
            array (
                'idcategoria' => 173,
                'nombre' => 'VICEMINISTERIO DE VIVIENDA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:52',
                'updated_at' => '2021-07-07 05:05:52',
            ),
            173 => 
            array (
                'idcategoria' => 174,
                'nombre' => 'VIOLENCIA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:52',
                'updated_at' => '2021-07-07 05:05:52',
            ),
            174 => 
            array (
                'idcategoria' => 175,
                'nombre' => 'VICTIMIZACIÓN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:53',
                'updated_at' => '2021-07-07 05:05:53',
            ),
            175 => 
            array (
                'idcategoria' => 176,
                'nombre' => 'VIVIENDA',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:57',
                'updated_at' => '2021-07-07 05:05:57',
            ),
            176 => 
            array (
                'idcategoria' => 177,
                'nombre' => 'ZAMORA, RUBÉN',
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:57',
                'updated_at' => '2021-07-07 05:05:57',
            ),
        ));
        
        
    }
}