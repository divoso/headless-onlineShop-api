<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('type',11)->default('0');
		$table->integer('vendor_product_id',10)->unsigned();
		$table->integer('inventory',11);
		$table->integer('order_id',10)->unsigned()->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
