<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'novedad',
            'descripcion'=>'Productos de novedad.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'rebaja',
            'descripcion'=>'Productos en rebaja.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'fin temporada',
            'descripcion'=>'Productos de fin de temporada.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
