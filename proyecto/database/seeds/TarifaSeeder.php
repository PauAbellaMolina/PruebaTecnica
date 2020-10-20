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
            'fecha_fin'=>'2020-11-30 00:00:00',
            'precio'=>'1299',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'1',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'1099',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'1',
            'fecha_inicio'=>'2020-12-24 00:00:00',
            'fecha_fin'=>'2020-12-30 00:00:00',
            'precio'=>'899.49',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);


        DB::table('tarifas')->insert([
            'id_prod'=>'2',
            'fecha_inicio'=>'2020-10-01 00:00:00',
            'fecha_fin'=>'2020-11-30 00:00:00',
            'precio'=>'80',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'2',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'89',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'2',
            'fecha_inicio'=>'2020-12-24 00:00:00',
            'fecha_fin'=>'2020-12-30 00:00:00',
            'precio'=>'75',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);


        DB::table('tarifas')->insert([
            'id_prod'=>'3',
            'fecha_inicio'=>'2020-10-01 00:00:00',
            'fecha_fin'=>'2020-11-30 00:00:00',
            'precio'=>'750',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'3',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'709',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'3',
            'fecha_inicio'=>'2020-12-24 00:00:00',
            'fecha_fin'=>'2020-12-30 00:00:00',
            'precio'=>'700.95',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);


        DB::table('tarifas')->insert([
            'id_prod'=>'4',
            'fecha_inicio'=>'2020-10-01 00:00:00',
            'fecha_fin'=>'2020-11-30 00:00:00',
            'precio'=>'499',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'4',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'449.99',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'4',
            'fecha_inicio'=>'2020-12-24 00:00:00',
            'fecha_fin'=>'2020-12-30 00:00:00',
            'precio'=>'389',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);


        DB::table('tarifas')->insert([
            'id_prod'=>'5',
            'fecha_inicio'=>'2020-10-01 00:00:00',
            'fecha_fin'=>'2020-11-30 00:00:00',
            'precio'=>'275',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'5',
            'fecha_inicio'=>'2020-05-01 00:00:00',
            'fecha_fin'=>'2020-08-30 00:00:00',
            'precio'=>'349.20',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('tarifas')->insert([
            'id_prod'=>'5',
            'fecha_inicio'=>'2020-12-24 00:00:00',
            'fecha_fin'=>'2020-12-30 00:00:00',
            'precio'=>'289',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
