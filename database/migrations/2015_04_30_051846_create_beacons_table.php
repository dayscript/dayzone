<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeaconsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beacons', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('uuid');
            $table->string('major');
            $table->string('minor');
            $table->string('image');
            $table->string('materia');
            $table->string('mensaje');
            $table->string('mesa');
            $table->string('evaluacion');
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
		Schema::drop('beacons');
	}

}
