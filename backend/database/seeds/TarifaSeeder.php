<?php

use Illuminate\Database\Seeder;

class TarifaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarifas')->insert([
            'id_prod'=>'1',
            'fecha_inicio'=>'2020-10-01 00:00:00',
            'fecha_fin'=>'2020-10-30 00:00:00',
            'precio'=>'5',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'2',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'10.50',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'3',
            'fecha_inicio'=>'2020-12-20 00:00:00',
            'fecha_fin'=>'2020-12-24 00:00:00',
            'precio'=>'7.99',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
