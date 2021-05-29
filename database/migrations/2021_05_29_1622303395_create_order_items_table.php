<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('order_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->integer('price');
		$table->integer('off_price')->default(0);
		$table->integer('product_id')->unsigned()->nullable()->nullable();
		$table->integer('item_id')->unsigned();
		$table->integer('count');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
