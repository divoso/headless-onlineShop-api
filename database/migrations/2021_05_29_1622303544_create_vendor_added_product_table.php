<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorAddedProductTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_added_product', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('product_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('is_seen',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_added_product');
    }
}
