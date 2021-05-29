<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorShippingPricesTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_shipping_prices', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->integer('price');
		$table->integer('vendor_id')->unsigned();
		$table->integer('destination')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_shipping_prices');
    }
}
