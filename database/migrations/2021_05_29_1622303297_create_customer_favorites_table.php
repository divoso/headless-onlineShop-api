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

		$table->integer('id',10)->unsigned();
		$table->integer('vendor_product_id',10)->unsigned();
		$table->integer('product_id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned();
		$table->integer('added_by_system',11)->default('2');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_favorites');
    }
}
