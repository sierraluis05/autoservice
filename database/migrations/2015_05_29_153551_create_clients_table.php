<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clients',function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->integer('document_type_id')->unsigned();//
            $table->integer('document');
            $table->integer('city_id')->unsigned();//
            $table->integer('client_type_id')->unsigned();//
            $table->integer('gender_id')->unsigned();//
            $table->string('address');
            $table->string('phone');
            $table->string('birthday');
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('client_type_id')->references('id')->on('client_types');
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
		Schema::drop('clients');
	}

}
