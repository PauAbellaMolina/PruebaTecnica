<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre'=>'Pau',
            'apellidos'=>'Abella Molina',
            'fecha_nacimiento'=>'2001-12-03 00:00:00',
            'email'=>'pau@pau.com',
            'password'=>'1234',
            'url_foto'=>'www.pauabella.dev',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            'nombre'=>'Marc',
            'apellidos'=>'Abella Molina',
            'fecha_nacimiento'=>'1993-08-09 00:00:00',
            'email'=>'marc@marc.com',
            'password'=>'1234',
            'url_foto'=>'www.marcabella.dev',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
