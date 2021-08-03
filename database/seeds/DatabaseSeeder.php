<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
        $this->call(IndiceTableSeeder::class);
        $this->call(InformeTableSeeder::class);
        $this->call(PreguntaTableSeeder::class);
        $this->call(SubcategoriaTableSeeder::class);
        $this->call(SubpreguntaTableSeeder::class);
        $this->call(TipoInformeTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
    }
}
