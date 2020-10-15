<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'MacBook Pro',
            'descripcion'=>'Portátil Apple MacBook Pro 2018 15".',
            'url_foto'=>'www.test-url.com',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'iPhone 11 Max',
            'descripcion'=>'Smartphone Apple iPhone Max 2020 256GB.',
            'url_foto'=>'www.test-url.com',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'GoPro Hero 9 BE',
            'descripcion'=>'Cámara de acción GoPro Hero 9 Black Edition.',
            'url_foto'=>'www.test-url.com',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
