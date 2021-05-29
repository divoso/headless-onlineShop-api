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

		$table->unsignedInteger('id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('type')->default(0);
		$table->integer('vendor_product_id')->unsigned();
		$table->integer('inventory');
		$table->integer('order_id')->unsigned()->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
