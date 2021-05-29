<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorCheckOutsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_check_outs', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('amount');
		$table->integer('final_amount');
		$table->string('commission');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_check_outs');
    }
}
