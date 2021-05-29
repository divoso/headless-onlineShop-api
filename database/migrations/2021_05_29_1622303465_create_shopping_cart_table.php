<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned()->nullable()->default('NULL');
		$table->string('unique_token')->nullable()->default('NULL');
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('status',11)->default('1');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('shopping_cart');
    }
}
