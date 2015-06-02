<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('order_details',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('vehicle_service_id')->unsigned();
            $table->integer('price');
            $table->integer('service_state_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('vehicle_service_id')->references('id')->on('vehicle_services');
            $table->foreign('service_state_id')->references('id')->on('service_states');
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
		Schema::drop('order_details');
	}

}
