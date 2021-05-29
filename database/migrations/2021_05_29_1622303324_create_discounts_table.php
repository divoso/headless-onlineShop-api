<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('title');
		$table->integer('type_id',10)->unsigned();
		$table->string('code');
		$table->integer('amount_type',11)->default('1');
		$table->integer('amount',11);
		$table->integer('max_amount',11)->nullable()->default('NULL');
		$table->string('text')->nullable()->default('NULL');
		$table->integer('customer_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('category_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('vendor_product_id',10)->unsigned()->nullable()->default('NULL');
		$table->timestamp('start_date')->default('CURRENT_TIMESTAMP');
		$table->integer('vendor_id',10)->unsigned()->nullable()->default('NULL');
		$table->timestamp('stop_date')->default('CURRENT_TIMESTAMP');
		$table->integer('status',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
