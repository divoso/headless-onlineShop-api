<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerFavoritesTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('customer_favorites', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('vendor_product_id')->unsigned();
		$table->integer('product_id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->integer('added_by_system')->default('2');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_favorites');
    }
}
