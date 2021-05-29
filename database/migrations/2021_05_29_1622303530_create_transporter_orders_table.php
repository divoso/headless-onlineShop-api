<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporterOrdersTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('transporter_orders', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('order_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('transporter_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('transporter_orders');
    }
}
