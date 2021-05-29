<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorLocationsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_locations', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		;
		;
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_locations');
    }
}
