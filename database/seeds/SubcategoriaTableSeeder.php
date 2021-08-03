<?php


use Illuminate\Database\Seeder;

class SubcategoriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategoria')->delete();
        
        \DB::table('subcategoria')->insert(array (
            0 => 
            array (
                'idsubcategoria' => 1,
                'nombre' => 'DIALOGO – NEGOCIACIÓN',
                'idcategoria' => 2,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:30',
                'updated_at' => '2021-07-07 05:03:30',
            ),
            1 => 
            array (
                'idsubcategoria' => 2,
                'nombre' => 'LEY DE AMNISTÍA',
                'idcategoria' => 2,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:30',
                'updated_at' => '2021-07-07 05:03:30',
            ),
            2 => 
            array (
                'idsubcategoria' => 3,
                'nombre' => 'ALCALDÍA DE SAN SALVADOR',
                'idcategoria' => 5,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:33',
                'updated_at' => '2021-07-07 05:03:33',
            ),
            3 => 
            array (
                'idsubcategoria' => 4,
                'nombre' => 'ALCALDE',
                'idcategoria' => 5,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:34',
                'updated_at' => '2021-07-07 05:03:34',
            ),
            4 => 
            array (
                'idsubcategoria' => 5,
                'nombre' => 'ALCALDE DE SAN SALVADOR',
                'idcategoria' => 5,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:35',
                'updated_at' => '2021-07-07 05:03:35',
            ),
            5 => 
            array (
                'idsubcategoria' => 6,
                'nombre' => 'SERVICIOS QUE PRESTA LAS ALCALDÍAS',
                'idcategoria' => 5,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:35',
                'updated_at' => '2021-07-07 05:03:35',
            ),
            6 => 
            array (
                'idsubcategoria' => 7,
                'nombre' => 'ACTITUDES SOBRE USO DE ARMAS',
                'idcategoria' => 9,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:38',
                'updated_at' => '2021-07-07 05:03:38',
            ),
            7 => 
            array (
                'idsubcategoria' => 8,
                'nombre' => 'DIPUTADOS',
                'idcategoria' => 10,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:41',
                'updated_at' => '2021-07-07 05:03:41',
            ),
            8 => 
            array (
                'idsubcategoria' => 9,
                'nombre' => 'AGRESIÓN AUTORITARIA',
                'idcategoria' => 11,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:44',
                'updated_at' => '2021-07-07 05:03:44',
            ),
            9 => 
            array (
                'idsubcategoria' => 10,
                'nombre' => 'IDEOLOGIA POLÍTICA',
                'idcategoria' => 40,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:03:51',
                'updated_at' => '2021-07-07 05:03:51',
            ),
            10 => 
            array (
                'idsubcategoria' => 11,
                'nombre' => 'TERREMOTOS',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:01',
                'updated_at' => '2021-07-07 05:04:01',
            ),
            11 => 
            array (
                'idsubcategoria' => 12,
                'nombre' => 'LLUVIAS',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:01',
                'updated_at' => '2021-07-07 05:04:01',
            ),
            12 => 
            array (
                'idsubcategoria' => 13,
                'nombre' => 'PREVENCIÓN DE DESASTRES',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:01',
                'updated_at' => '2021-07-07 05:04:01',
            ),
            13 => 
            array (
                'idsubcategoria' => 14,
                'nombre' => 'AYUDAS',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:01',
                'updated_at' => '2021-07-07 05:04:01',
            ),
            14 => 
            array (
                'idsubcategoria' => 15,
                'nombre' => 'ASPECTOS PSICOLÓGICOS',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:01',
                'updated_at' => '2021-07-07 05:04:01',
            ),
            15 => 
            array (
                'idsubcategoria' => 16,
                'nombre' => 'RECONSTRUCCIÓN',
                'idcategoria' => 47,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:02',
                'updated_at' => '2021-07-07 05:04:02',
            ),
            16 => 
            array (
                'idsubcategoria' => 17,
                'nombre' => 'DOLARIZACIÓN',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:04',
                'updated_at' => '2021-07-07 05:04:04',
            ),
            17 => 
            array (
                'idsubcategoria' => 18,
                'nombre' => 'GLOBALIZACIÓN',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:04',
                'updated_at' => '2021-07-07 05:04:04',
            ),
            18 => 
            array (
                'idsubcategoria' => 19,
            'nombre' => 'INFLACIÓN (ALTO COSTO DE LA VIDA)',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:04',
                'updated_at' => '2021-07-07 05:04:04',
            ),
            19 => 
            array (
                'idsubcategoria' => 20,
                'nombre' => 'INCREMENTO DE PRECIOS DEL COMBUSTIBLE',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:05',
                'updated_at' => '2021-07-07 05:04:05',
            ),
            20 => 
            array (
                'idsubcategoria' => 21,
                'nombre' => 'IVA',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:06',
                'updated_at' => '2021-07-07 05:04:06',
            ),
            21 => 
            array (
                'idsubcategoria' => 22,
                'nombre' => 'POLÍTICA ECONÓMICA / MEDIDAS ECONÓMICAS',
                'idcategoria' => 50,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:06',
                'updated_at' => '2021-07-07 05:04:06',
            ),
            22 => 
            array (
                'idsubcategoria' => 23,
                'nombre' => 'REMESAS',
                'idcategoria' => 51,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:08',
                'updated_at' => '2021-07-07 05:04:08',
            ),
            23 => 
            array (
                'idsubcategoria' => 24,
                'nombre' => 'ALFABETIZACIÓN',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            24 => 
            array (
                'idsubcategoria' => 25,
                'nombre' => 'INFRAESTRUCTUTRA',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            25 => 
            array (
                'idsubcategoria' => 26,
                'nombre' => 'ESCUELA PARA PADRES',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            26 => 
            array (
                'idsubcategoria' => 27,
                'nombre' => 'PAES',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            27 => 
            array (
                'idsubcategoria' => 28,
            'nombre' => 'PAQUETE ESCOLAR (ENTREGA DE ÚTILES Y UNIFORMES)',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            28 => 
            array (
                'idsubcategoria' => 29,
                'nombre' => 'PROFESORES/DOCENTES',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            29 => 
            array (
                'idsubcategoria' => 30,
                'nombre' => 'PROGRAMAS DE COBERTURA EDUCATIVA',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:09',
                'updated_at' => '2021-07-07 05:04:09',
            ),
            30 => 
            array (
                'idsubcategoria' => 31,
                'nombre' => 'REUNIONES DE PADRES DE FAMILIA',
                'idcategoria' => 52,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:10',
                'updated_at' => '2021-07-07 05:04:10',
            ),
            31 => 
            array (
                'idsubcategoria' => 32,
                'nombre' => 'ABSTENCIÓN',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:13',
                'updated_at' => '2021-07-07 05:04:13',
            ),
            32 => 
            array (
                'idsubcategoria' => 33,
                'nombre' => 'CAMPAÑA ELECTORAL',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:14',
                'updated_at' => '2021-07-07 05:04:14',
            ),
            33 => 
            array (
                'idsubcategoria' => 34,
                'nombre' => 'CENTRO DE VOTACION',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:15',
                'updated_at' => '2021-07-07 05:04:15',
            ),
            34 => 
            array (
                'idsubcategoria' => 35,
                'nombre' => 'FRAUDE ELECTORAL',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:15',
                'updated_at' => '2021-07-07 05:04:15',
            ),
            35 => 
            array (
                'idsubcategoria' => 36,
                'nombre' => 'INTENCIÓN DE VOTO',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:16',
                'updated_at' => '2021-07-07 05:04:16',
            ),
            36 => 
            array (
                'idsubcategoria' => 37,
                'nombre' => 'POSESIÓN DE CARNET',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:18',
                'updated_at' => '2021-07-07 05:04:18',
            ),
            37 => 
            array (
                'idsubcategoria' => 38,
                'nombre' => 'PRESIÓN PARA VOTAR',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:19',
                'updated_at' => '2021-07-07 05:04:19',
            ),
            38 => 
            array (
                'idsubcategoria' => 39,
                'nombre' => 'PROBLEMAS, ANOMALÍAS',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:19',
                'updated_at' => '2021-07-07 05:04:19',
            ),
            39 => 
            array (
                'idsubcategoria' => 40,
                'nombre' => 'REFORMAS ELECTORALES',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:20',
                'updated_at' => '2021-07-07 05:04:20',
            ),
            40 => 
            array (
                'idsubcategoria' => 41,
                'nombre' => 'CANDIDATO A PRESIDENTE',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:21',
                'updated_at' => '2021-07-07 05:04:21',
            ),
            41 => 
            array (
                'idsubcategoria' => 42,
                'nombre' => 'CANDIDATO A VICEPRESIDENTE',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:22',
                'updated_at' => '2021-07-07 05:04:22',
            ),
            42 => 
            array (
                'idsubcategoria' => 43,
                'nombre' => 'CANDIDATO A ALCALDE',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:22',
                'updated_at' => '2021-07-07 05:04:22',
            ),
            43 => 
            array (
                'idsubcategoria' => 44,
                'nombre' => 'CANDIDATO A ALCALDE DE SAN SALVADOR',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:22',
                'updated_at' => '2021-07-07 05:04:22',
            ),
            44 => 
            array (
                'idsubcategoria' => 45,
                'nombre' => 'CANDIDATO A DIPUTADO',
                'idcategoria' => 53,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:23',
                'updated_at' => '2021-07-07 05:04:23',
            ),
            45 => 
            array (
                'idsubcategoria' => 46,
                'nombre' => 'ASOCIO PARA EL CRECIMIENTO / FOMILENIO II',
                'idcategoria' => 61,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:25',
                'updated_at' => '2021-07-07 05:04:25',
            ),
            46 => 
            array (
                'idsubcategoria' => 47,
                'nombre' => 'DONALD TRUMP',
                'idcategoria' => 61,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:25',
                'updated_at' => '2021-07-07 05:04:25',
            ),
            47 => 
            array (
                'idsubcategoria' => 48,
                'nombre' => 'FISCALES / FISCAL GENERAL',
                'idcategoria' => 65,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:27',
                'updated_at' => '2021-07-07 05:04:27',
            ),
            48 => 
            array (
                'idsubcategoria' => 49,
                'nombre' => 'ENVIO DE TROPAS A OTROS PAISES',
                'idcategoria' => 69,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:32',
                'updated_at' => '2021-07-07 05:04:32',
            ),
            49 => 
            array (
                'idsubcategoria' => 50,
                'nombre' => 'GOBIERNO DE ARENA',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:42',
                'updated_at' => '2021-07-07 05:04:42',
            ),
            50 => 
            array (
                'idsubcategoria' => 51,
                'nombre' => 'GOBIERNO DE FMLN ',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:43',
                'updated_at' => '2021-07-07 05:04:43',
            ),
            51 => 
            array (
                'idsubcategoria' => 52,
                'nombre' => 'GOBIERNO DE ALFREDO CRISTIANI',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:43',
                'updated_at' => '2021-07-07 05:04:43',
            ),
            52 => 
            array (
                'idsubcategoria' => 53,
                'nombre' => 'GOBIERNO DE CALDERÓN SOL',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:43',
                'updated_at' => '2021-07-07 05:04:43',
            ),
            53 => 
            array (
                'idsubcategoria' => 54,
                'nombre' => 'GOBIERNO DE FRANCISCO FLORES',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:45',
                'updated_at' => '2021-07-07 05:04:45',
            ),
            54 => 
            array (
                'idsubcategoria' => 55,
                'nombre' => 'GOBIERNO DE ELÍAS ANTONIO SACA',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:46',
                'updated_at' => '2021-07-07 05:04:46',
            ),
            55 => 
            array (
                'idsubcategoria' => 56,
                'nombre' => 'GOBIERNO DE MAURICIO FUNES',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:49',
                'updated_at' => '2021-07-07 05:04:49',
            ),
            56 => 
            array (
                'idsubcategoria' => 57,
                'nombre' => 'GOBIERNO DE SALVADOR SÁNCHEZ CERÉN ',
                'idcategoria' => 73,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:50',
                'updated_at' => '2021-07-07 05:04:50',
            ),
            57 => 
            array (
                'idsubcategoria' => 58,
                'nombre' => 'CAUSAS DE LA GUERRA',
                'idcategoria' => 74,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            58 => 
            array (
                'idsubcategoria' => 59,
                'nombre' => 'MEJOR MANERA DE RESOLVER LA GUERRA',
                'idcategoria' => 74,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            59 => 
            array (
                'idsubcategoria' => 60,
                'nombre' => 'ESTADOS UNIDOS Y LA GUERRA',
                'idcategoria' => 74,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:51',
                'updated_at' => '2021-07-07 05:04:51',
            ),
            60 => 
            array (
                'idsubcategoria' => 61,
            'nombre' => 'ARZOBISPO (SACERDOTES)',
                'idcategoria' => 80,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            61 => 
            array (
                'idsubcategoria' => 62,
                'nombre' => 'PASTORES',
                'idcategoria' => 81,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:53',
                'updated_at' => '2021-07-07 05:04:53',
            ),
            62 => 
            array (
                'idsubcategoria' => 63,
                'nombre' => 'JUSTICIA SOCIAL',
                'idcategoria' => 89,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:55',
                'updated_at' => '2021-07-07 05:04:55',
            ),
            63 => 
            array (
                'idsubcategoria' => 64,
            'nombre' => 'LEY ANTIMARAS / ANTIPANDILLAS / (REHABILITACIóN)',
                'idcategoria' => 91,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:56',
                'updated_at' => '2021-07-07 05:04:56',
            ),
            64 => 
            array (
                'idsubcategoria' => 65,
                'nombre' => 'LEY CONTRA DELINCUENCIA Y CRIMEN ORGANIZADO',
                'idcategoria' => 91,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:56',
                'updated_at' => '2021-07-07 05:04:56',
            ),
            65 => 
            array (
                'idsubcategoria' => 66,
                'nombre' => 'LIBERTAD POLÍTICA',
                'idcategoria' => 92,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:56',
                'updated_at' => '2021-07-07 05:04:56',
            ),
            66 => 
            array (
                'idsubcategoria' => 67,
                'nombre' => 'LIBERTAD DE EXPRESIÓN',
                'idcategoria' => 92,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:56',
                'updated_at' => '2021-07-07 05:04:56',
            ),
            67 => 
            array (
                'idsubcategoria' => 68,
                'nombre' => 'TREGUA ENTRE PANDILLAS',
                'idcategoria' => 97,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:58',
                'updated_at' => '2021-07-07 05:04:58',
            ),
            68 => 
            array (
                'idsubcategoria' => 69,
                'nombre' => 'NEGOCIACIÓN DE GOBIERNO CON PANDILLAS',
                'idcategoria' => 97,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:59',
                'updated_at' => '2021-07-07 05:04:59',
            ),
            69 => 
            array (
                'idsubcategoria' => 70,
                'nombre' => 'BASURA',
                'idcategoria' => 98,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:04:59',
                'updated_at' => '2021-07-07 05:04:59',
            ),
            70 => 
            array (
                'idsubcategoria' => 71,
                'nombre' => 'TELEVISIÓN',
                'idcategoria' => 99,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:01',
                'updated_at' => '2021-07-07 05:05:01',
            ),
            71 => 
            array (
                'idsubcategoria' => 72,
                'nombre' => 'PERIÓDICOS',
                'idcategoria' => 99,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:01',
                'updated_at' => '2021-07-07 05:05:01',
            ),
            72 => 
            array (
                'idsubcategoria' => 73,
                'nombre' => 'RADIO',
                'idcategoria' => 99,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:02',
                'updated_at' => '2021-07-07 05:05:02',
            ),
            73 => 
            array (
                'idsubcategoria' => 74,
                'nombre' => 'A FONDO',
                'idcategoria' => 99,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:03',
                'updated_at' => '2021-07-07 05:05:03',
            ),
            74 => 
            array (
                'idsubcategoria' => 75,
                'nombre' => 'RADIO YSUCA',
                'idcategoria' => 99,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:03',
                'updated_at' => '2021-07-07 05:05:03',
            ),
            75 => 
            array (
                'idsubcategoria' => 76,
                'nombre' => 'EMPRESAS MINERAS',
                'idcategoria' => 102,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:04',
                'updated_at' => '2021-07-07 05:05:04',
            ),
            76 => 
            array (
                'idsubcategoria' => 77,
                'nombre' => 'PROYECTOS MINEROS',
                'idcategoria' => 102,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            77 => 
            array (
                'idsubcategoria' => 78,
                'nombre' => 'MINISTROS',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            78 => 
            array (
                'idsubcategoria' => 79,
                'nombre' => 'MINISTERIO DE AGRICULTURA Y GANADERÍA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            79 => 
            array (
                'idsubcategoria' => 80,
                'nombre' => 'MINISTERIO DE DEFENSA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            80 => 
            array (
                'idsubcategoria' => 81,
                'nombre' => 'MINISTERIO DE ECONOMÍA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:05',
                'updated_at' => '2021-07-07 05:05:05',
            ),
            81 => 
            array (
                'idsubcategoria' => 82,
                'nombre' => 'MINISTERIO DE EDUCACIÓN',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:06',
                'updated_at' => '2021-07-07 05:05:06',
            ),
            82 => 
            array (
                'idsubcategoria' => 83,
                'nombre' => 'MINISTRO DE EDUCACIÓN',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:06',
                'updated_at' => '2021-07-07 05:05:06',
            ),
            83 => 
            array (
                'idsubcategoria' => 84,
                'nombre' => 'MINISTERIO DE GOBERNACIÓN',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:06',
                'updated_at' => '2021-07-07 05:05:06',
            ),
            84 => 
            array (
                'idsubcategoria' => 85,
                'nombre' => 'MINISTERIO DE HACIENDA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:06',
                'updated_at' => '2021-07-07 05:05:06',
            ),
            85 => 
            array (
                'idsubcategoria' => 86,
                'nombre' => 'MINISTERIO DE MEDIO AMBIENTE',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:07',
                'updated_at' => '2021-07-07 05:05:07',
            ),
            86 => 
            array (
                'idsubcategoria' => 87,
                'nombre' => 'MINISTERIO DE OBRAS PÚBLICAS',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:07',
                'updated_at' => '2021-07-07 05:05:07',
            ),
            87 => 
            array (
                'idsubcategoria' => 88,
                'nombre' => 'MINISTERIO DE RELACIONES EXTERIORES',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:07',
                'updated_at' => '2021-07-07 05:05:07',
            ),
            88 => 
            array (
                'idsubcategoria' => 89,
                'nombre' => 'MINISTERIO DE SALUD / MINISTERIO DE SALUD Y ASISTENCIA SOCIAL',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:07',
                'updated_at' => '2021-07-07 05:05:07',
            ),
            89 => 
            array (
                'idsubcategoria' => 90,
                'nombre' => 'MINISTRO DE SALUD',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:08',
                'updated_at' => '2021-07-07 05:05:08',
            ),
            90 => 
            array (
                'idsubcategoria' => 91,
                'nombre' => 'MINISTERIO DE SEGURIDAD PÚBLICA / MINISTERIO DE SEGURIDAD Y JUSTICIA / MINISTERIO DE JUSTICIA Y SEGURIDAD',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:08',
                'updated_at' => '2021-07-07 05:05:08',
            ),
            91 => 
            array (
                'idsubcategoria' => 92,
                'nombre' => 'MINISTERIO DE TRABAJO / MINISTERIO DE TRABAJO Y PREVISIÓN SOCIAL',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:08',
                'updated_at' => '2021-07-07 05:05:08',
            ),
            92 => 
            array (
                'idsubcategoria' => 93,
                'nombre' => 'MINISTERIO DE TURISMO',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:08',
                'updated_at' => '2021-07-07 05:05:08',
            ),
            93 => 
            array (
                'idsubcategoria' => 94,
                'nombre' => 'SECRETARIA DE ASUNTOS ESTRATEGICOS',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:08',
                'updated_at' => '2021-07-07 05:05:08',
            ),
            94 => 
            array (
                'idsubcategoria' => 95,
                'nombre' => 'SECRETARÍA DE INCLUSIÓN SOCIAL',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            95 => 
            array (
                'idsubcategoria' => 96,
                'nombre' => 'SECRETARÍA NACIONAL DE LA FAMILIA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            96 => 
            array (
                'idsubcategoria' => 97,
                'nombre' => 'SECRETARÍA NACIONAL DE LA JUVENTUD',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            97 => 
            array (
                'idsubcategoria' => 98,
                'nombre' => 'SECRETARÍA DE TRANSPARENCIA',
                'idcategoria' => 103,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:09',
                'updated_at' => '2021-07-07 05:05:09',
            ),
            98 => 
            array (
                'idsubcategoria' => 99,
                'nombre' => 'CIUDAD MUJER',
                'idcategoria' => 107,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:11',
                'updated_at' => '2021-07-07 05:05:11',
            ),
            99 => 
            array (
                'idsubcategoria' => 100,
                'nombre' => 'ORGANIZACIÓN COMUNITARIA',
                'idcategoria' => 112,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:12',
                'updated_at' => '2021-07-07 05:05:12',
            ),
            100 => 
            array (
                'idsubcategoria' => 101,
                'nombre' => 'CONVIVENCIA COMUNITARIA',
                'idcategoria' => 112,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:12',
                'updated_at' => '2021-07-07 05:05:12',
            ),
            101 => 
            array (
                'idsubcategoria' => 102,
                'nombre' => 'PROCURADOR/A DH',
                'idcategoria' => 118,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:21',
                'updated_at' => '2021-07-07 05:05:21',
            ),
            102 => 
            array (
                'idsubcategoria' => 103,
                'nombre' => 'POLICÍAS',
                'idcategoria' => 124,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:23',
                'updated_at' => '2021-07-07 05:05:23',
            ),
            103 => 
            array (
                'idsubcategoria' => 104,
                'nombre' => 'POLICÍA COMUNITARIA',
                'idcategoria' => 124,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:24',
                'updated_at' => '2021-07-07 05:05:24',
            ),
            104 => 
            array (
                'idsubcategoria' => 105,
                'nombre' => 'PROGRAMAS / MEDIDAS PARA REDUCIR POBREZA',
                'idcategoria' => 125,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:25',
                'updated_at' => '2021-07-07 05:05:25',
            ),
            105 => 
            array (
                'idsubcategoria' => 106,
                'nombre' => 'SOLUCIONES',
                'idcategoria' => 130,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:31',
                'updated_at' => '2021-07-07 05:05:31',
            ),
            106 => 
            array (
                'idsubcategoria' => 107,
                'nombre' => 'LIDERES SINDICALES',
                'idcategoria' => 155,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:42',
                'updated_at' => '2021-07-07 05:05:42',
            ),
            107 => 
            array (
                'idsubcategoria' => 108,
                'nombre' => 'CONFIANZA INTERPERSONAL',
                'idcategoria' => 163,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:49',
                'updated_at' => '2021-07-07 05:05:49',
            ),
            108 => 
            array (
                'idsubcategoria' => 109,
                'nombre' => 'SITRAMSS',
                'idcategoria' => 167,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:50',
                'updated_at' => '2021-07-07 05:05:50',
            ),
            109 => 
            array (
                'idsubcategoria' => 110,
                'nombre' => 'IDHUCA',
                'idcategoria' => 170,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:51',
                'updated_at' => '2021-07-07 05:05:51',
            ),
            110 => 
            array (
                'idsubcategoria' => 111,
                'nombre' => 'ACTITUDES HACIA LA VIOLENCIA',
                'idcategoria' => 174,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:52',
                'updated_at' => '2021-07-07 05:05:52',
            ),
            111 => 
            array (
                'idsubcategoria' => 112,
                'nombre' => 'VIOLENCIA JUVENIL',
                'idcategoria' => 174,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:52',
                'updated_at' => '2021-07-07 05:05:52',
            ),
            112 => 
            array (
                'idsubcategoria' => 113,
                'nombre' => 'VIOLENCIA FAMILIAR',
                'idcategoria' => 174,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:53',
                'updated_at' => '2021-07-07 05:05:53',
            ),
            113 => 
            array (
                'idsubcategoria' => 114,
                'nombre' => 'DENUNCIAS',
                'idcategoria' => 175,
                'eliminado' => 0,
                'idusuario' => NULL,
                'created_at' => '2021-07-07 05:05:57',
                'updated_at' => '2021-07-07 05:05:57',
            ),
        ));
        
        
    }
}