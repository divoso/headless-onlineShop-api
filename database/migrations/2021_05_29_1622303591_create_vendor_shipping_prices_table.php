<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorShippingPricesTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_shipping_prices', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name');
		$table->integer('price',11);
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('destination',11)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_shipping_prices');
    }
}
