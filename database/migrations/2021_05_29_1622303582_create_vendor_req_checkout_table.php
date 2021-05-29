<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorReqCheckoutTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_req_checkout', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_req_checkout');
    }
}
