<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGcmsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('gcms', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('customer_id')->unsigned()->nullable()->nullable();
		$table->integer('operator_id')->unsigned()->nullable()->nullable();
		$table->integer('transporter_id')->unsigned()->nullable()->nullable();
		$table->integer('vendor_id')->unsigned()->nullable()->nullable();
		$table->integer('dev_type')->nullable()->nullable();
		$table->string('gcm_id')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('gcms');
    }
}
