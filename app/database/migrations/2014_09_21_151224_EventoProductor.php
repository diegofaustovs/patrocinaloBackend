<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoProductor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('EventoProductor', function($table){
            $table -> foreign ('id_productor') -> references('id') -> on('productores');
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
