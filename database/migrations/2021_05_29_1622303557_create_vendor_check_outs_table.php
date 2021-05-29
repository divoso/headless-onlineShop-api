<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorCheckOutsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_check_outs', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('amount',11);
		$table->integer('final_amount',11);
		$table->string('commission');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_check_outs');
    }
}
