<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios',function($table){
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->unique('email');
			$table->string('password');
			$table->string('image_perfil')
			$table->string('nick');
		})
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
