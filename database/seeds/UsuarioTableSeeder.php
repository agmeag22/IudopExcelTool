<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usuario')->delete();
        
        \DB::table('usuario')->insert(array (
            0 => 
            array (
                'idusuario' => 1,
                'idrol' => 1,
                'username' => 'admin',
                'nombre' => 'admin',
                'email' => 'admin',
                'estado' => 1,
                'eliminado' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$.z3.a5hEonB.7B02cVHlyeP8G4UJsCrCLJraPiTtGbS.q8v5Rp1aS',
                'remember_token' => NULL,
                'idusuario_responsable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'idusuario' => 2,
                'idrol' => 2,
                'username' => 'laura.andrade',
                'nombre' => 'Laura Regina Andrade',
                'email' => 'landrade@uca.edu.sv',
                'estado' => 1,
                'eliminado' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$fuFHzXPNGLT2q2KkC0LDIOmC5UezYLr6r5.6sO1XTkqDuBxU/6eEe',
                'remember_token' => NULL,
                'idusuario_responsable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}