<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatrocinadorEvento extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PatrocinadorEvento', function($table){
            $table -> foreign ('id_patrocinador') -> references('id') -> on('patrocinadores');
            $table -> foreign ('id_evento') -> references('id') -> on('eventos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PatrocinadorEvento');
	}

}
