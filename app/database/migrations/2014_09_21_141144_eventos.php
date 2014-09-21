<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('eventos', function($table)
        {
            $table -> increments('id') -> unique();
            $table -> string('categoria');
            $table -> string('subcategoria');
            $table -> string('nombre');
            $table -> string('aforo');
            $table -> string('ciudad');
            $table -> string('pais');
            $table -> string('link');
        });

        Schema::table('eventos', function($table){
            $table -> foreign ('id_productor') -> references('id') -> on('productores');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventos');
	}

}
