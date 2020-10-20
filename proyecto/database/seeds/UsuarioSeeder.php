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
            'password'=>Hash::make('12345678'),
            'url_foto'=>'https://images.generated.photos/pmb8-ABvccZAWpxEjghXrXGM7WlfUPS5zEzh_0xJA88/rs:fit:512:512/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0NzMxODYuanBn.jpg',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            'nombre'=>'Marc',
            'apellidos'=>'Abella Molina',
            'fecha_nacimiento'=>'1993-08-09 00:00:00',
            'email'=>'marc@marc.com',
            'password'=>Hash::make('qwertyui'),
            'url_foto'=>'https://images.generated.photos/LPxp7Sn-TsuMDF-RxEYsSDYOnWi1rsIH9AYLOcE6OQE/rs:fit:512:512/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA5NTk4NzIuanBn.jpg',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            'nombre'=>'Francis',
            'apellidos'=>'Georde Hotz',
            'fecha_nacimiento'=>'1989-10-02 00:00:00',
            'email'=>'geo@hotz.com',
            'password'=>Hash::make('commaaidriving'),
            'url_foto'=>'https://images.generated.photos/Vs-ReIsDMzsbedM6GYdVvUjM2AEvLPlAUJ17eoR_UH4/rs:fit:512:512/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0NjgyNTUuanBn.jpg',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            'nombre'=>'Limus',
            'apellidos'=>'Benedict Torvalds',
            'fecha_nacimiento'=>'1970-12-28 00:00:00',
            'email'=>'linux@os.com',
            'password'=>Hash::make('windowsisbad'),
            'url_foto'=>'https://images.generated.photos/kXxT6Ma0QAwCv9D3M1dwwsjyHygYN6pcAH_q1O7qbVE/rs:fit:512:512/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAwNjIyMjUuanBn.jpg',
            'api_token'=>Str::random(60),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
