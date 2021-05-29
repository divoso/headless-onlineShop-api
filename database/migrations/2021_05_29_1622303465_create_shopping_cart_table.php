<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('customer_id')->unsigned()->nullable()->nullable();
		$table->string('unique_token')->nullable()->nullable();
		$table->integer('vendor_id')->unsigned();
		$table->integer('status')->default('1');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('shopping_cart');
    }
}
