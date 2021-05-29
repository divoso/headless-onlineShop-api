<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorCommissionsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_commissions', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('commission_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_commissions');
    }
}
