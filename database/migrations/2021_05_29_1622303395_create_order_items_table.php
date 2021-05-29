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

		$table->integer('id',10)->unsigned();
		$table->integer('order_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned();
		$table->integer('price',11);
		$table->integer('off_price',11)->default('0');
		$table->integer('product_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('item_id',10)->unsigned();
		$table->integer('count',11);
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
