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

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'liquidación',
            'descripcion'=>'Productos en liquidación.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'oferta flash',
            'descripcion'=>'Productos en oferta flash.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'stock bajo',
            'descripcion'=>'Productos con stock bajo.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'black friday',
            'descripcion'=>'Productos para el black friday.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'cybermonday',
            'descripcion'=>'Productos para el cybermonday.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'muestra',
            'descripcion'=>'Productos de muestra.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'codigo_categoria'=>Str::random(5),
            'nombre'=>'reacondicionado',
            'descripcion'=>'Productos reacondicionados.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
