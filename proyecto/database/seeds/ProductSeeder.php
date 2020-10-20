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
            'url_foto'=>'https://picsum.photos/id/0/5616/3744',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'Kindle',
            'descripcion'=>'Libro electrónico con retroiluminación Amazon Kindle.',
            'url_foto'=>'https://picsum.photos/id/367/4928/3264',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'iPad Air',
            'descripcion'=>'Apple iPad Air versión iOS14 con un chip A13.',
            'url_foto'=>'https://i.picsum.photos/id/668/4133/2745.jpg?hmac=n2-nIVXnrSE_pCjAmI-nlhBicoySz1xq-KUFMr9ERrM',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'iPhone SE',
            'descripcion'=>'Apple iPhone SE 2020 iOS14',
            'url_foto'=>'https://i.picsum.photos/id/816/5760/3840.jpg?hmac=GGGDK83mK-OK5SsyNiB45tGIw09LTRaz41c-lmyltDs',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('products')->insert([
            'codigo_producto'=>Str::random(5),
            'nombre'=>'Samsung Watch Active 3',
            'descripcion'=>'Reloj inteligente Samsung Watch serie Active 3.',
            'url_foto'=>'https://i.picsum.photos/id/4/5616/3744.jpg?hmac=8wIoVTScZoSiagRtRYlNfcd7dYHEf9tGyyEF44ihYFI',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
