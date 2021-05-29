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

		$table->integer('id',10)->unsigned();
		$table->integer('product_id',10)->unsigned();
		$table->integer('price',11);
		$table->integer('off_price',11)->nullable()->default('NULL');
		$table->integer('stock',11)->default('0');
		$table->integer('status',11)->default('0');
		$table->integer('sort',11)->default('1');
		$table->integer('view',11)->default('0');
		$table->integer('vendor_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
