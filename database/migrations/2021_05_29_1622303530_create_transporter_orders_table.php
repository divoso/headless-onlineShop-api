<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporterOrdersTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('transporter_orders', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('order_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('transporter_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('transporter_orders');
    }
}
