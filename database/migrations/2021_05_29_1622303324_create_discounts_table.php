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

		$table->unsignedInteger('id')->unsigned();
		$table->string('title');
		$table->integer('type_id')->unsigned();
		$table->string('code');
		$table->integer('amount_type')->default('1');
		$table->integer('amount');
		$table->integer('max_amount')->nullable()->nullable();
		$table->string('text')->nullable()->nullable();
		$table->integer('customer_id')->unsigned()->nullable()->nullable();
		$table->integer('category_id')->unsigned()->nullable()->nullable();
		$table->integer('vendor_product_id')->unsigned()->nullable()->nullable();
		$table->timestamp('start_date')->nullable();
		$table->integer('vendor_id')->unsigned()->nullable()->nullable();
		$table->timestamp('stop_date')->nullable();
		$table->integer('status')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
