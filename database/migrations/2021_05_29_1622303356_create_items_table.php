<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('product_id')->unsigned();
		$table->integer('price');
		$table->integer('off_price')->nullable()->nullable();
		$table->integer('stock')->default(0);
		$table->integer('status')->default(0);
		$table->integer('sort')->default('1');
		$table->integer('view')->default(0);
		$table->integer('vendor_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
