<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    // TODO relations ** TODO relations
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('address_id')->unsigned();
		$table->integer('discount_id')->unsigned()->nullable()->nullable();
		$table->integer('amount');
		$table->integer('transaction_id')->unsigned()->nullable()->nullable();
		$table->string('arrive_time')->nullable()->nullable();
		$table->integer('pay_status')->default('1');
		$table->integer('delivery_type')->default(0);
		$table->string('tracking_code')->nullable()->nullable();
		$table->integer('status')->default(0);
		$table->integer('delivery_price')->default(0);
		$table->integer('amount_off')->default(0);
		$table->integer('rate')->nullable()->nullable();
		$table->integer('pay_type')->default(0);
		$table->string('is_seen')->default('00');
		$table->text('text');
		$table->integer('payed_to_vendor')->default(0);
		$table->integer('final_price');
		$table->integer('is_returned')->default(0);
		$table->float('commission')->default('3');
		$table->string('return_text')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
