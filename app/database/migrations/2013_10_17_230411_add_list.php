<?php

use Illuminate\Database\Migrations\Migration;

class AddList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   //creating lists table
	   Schema::create('listas', function($table) {
	       $table->increments('id');
	       $table->string('titulo', 100); //coluna de titulo, varchar de 100 caracteres
	       
	       $table->timestamps();
	   });
	   
	   
	   //add foreign key to TASKS table
	   Schema::table('tasks', function($table) {
	       $table->integer('list_id')->unsigned()->nullable();
	       
	       $table->foreign('list_id')->references('id')->on('listas')->onDelete('cascade')->onUpdate('cascade');
	   });
	}


	public function down()
	{
	   //remove foreign key
	   Schema::table('tasks', function($table){
	       $table->dropForeign('list_id');
	       $table->dropColumn('list_id');
	   });
	   
	   Schema::dropIfExists('listas'); //se a tabela existir, exclui
	}

}