<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorAddedProductTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_added_product', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('product_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('is_seen')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_added_product');
    }
}
