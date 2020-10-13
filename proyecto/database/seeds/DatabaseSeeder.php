<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'categorias',
            'products',
            'categs_prods',
            'tarifas'
        ]);

        $this->call(UsuarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CategsProdsRelationSeeder::class);
        $this->call(TarifaSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
