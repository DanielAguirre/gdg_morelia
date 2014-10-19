<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration implements SluggableInterface{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{		
    	
		
		Schema::create('posts',function($table){
			$table->increments('id');
			$table->integer('usuario_id');
			$table->integer('categoria_id');			
			$table->string('titulo');
			$table->string('portada');
			$table->text('descripcion');
			$table->text('descripcion');
			$table->foreign('categoria_id')>references('id')->on('categoria');
			$table->foreign('usuario_id')>references('id')->on('usuarios');
			$table->timestamps();
		});
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
