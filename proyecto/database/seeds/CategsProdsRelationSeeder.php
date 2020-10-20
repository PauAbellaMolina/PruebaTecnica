<?php

use Illuminate\Database\Seeder;

class CategsProdsRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categs_prods')->insert([
            'id_categ'=>'1',
            'id_prod'=>'1',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'2',
            'id_prod'=>'1',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'3',
            'id_prod'=>'2',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'4',
            'id_prod'=>'2',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'5',
            'id_prod'=>'3',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'6',
            'id_prod'=>'3',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'7',
            'id_prod'=>'4',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'8',
            'id_prod'=>'4',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'9',
            'id_prod'=>'5',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);

        DB::table('categs_prods')->insert([
            'id_categ'=>'10',
            'id_prod'=>'5',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
}
