<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProductRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categs_prods', function (Blueprint $table) {
            $table->primary(['id_categ', 'id_prod']);
            $table->unsignedInteger('id_categ');
            $table->unsignedInteger('id_prod');
            $table->timestamps();
        });

        //Adding FKs not hecking working in any way. Tried everything
        /* Schema::table('categs_prods', function ($table) {
            $table->foreign('id_categ')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_prod')->references('id')->on('products')->onDelete('cascade');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categs_prods');
    }
}
