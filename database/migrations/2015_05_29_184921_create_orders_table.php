<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('orders',function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->date('dateService');
            $table->integer('vehicle_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->integer('mechanical_id')->unsigned();
            $table->integer('turn');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('mechanical_id')->references('id')->on('employees');
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
		Schema::drop('orders');
	}

}
