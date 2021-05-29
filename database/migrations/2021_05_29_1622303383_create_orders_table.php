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

		$table->integer('id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('address_id',10)->unsigned();
		$table->integer('discount_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('amount',11);
		$table->integer('transaction_id',10)->unsigned()->nullable()->default('NULL');
		$table->string('arrive_time')->nullable()->default('NULL');
		$table->integer('pay_status',11)->default('1');
		$table->integer('delivery_type',11)->default('0');
		$table->string('tracking_code')->nullable()->default('NULL');
		$table->integer('status',11)->default('0');
		$table->integer('delivery_price',11)->default('0');
		$table->integer('amount_off',11)->default('0');
		$table->integer('rate',11)->nullable()->default('NULL');
		$table->integer('pay_type',11)->default('0');
		$table->string('is_seen')->default('00');
		$table->text('text');
		$table->integer('payed_to_vendor',11)->default('0');
		$table->integer('final_price',11);
		$table->integer('is_returned',11)->default('0');
		$table->float('commission')->default('3');
		$table->string('return_text')->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
