<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporterTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('transporter', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name')->nullable()->nullable();
		$table->integer('vendor_id')->unsigned()->nullable()->nullable();
		$table->string('phone_number');
		$table->string('password')->nullable()->nullable();
		$table->string('api_key')->nullable()->nullable();
		$table->integer('status')->default(0);
		$table->string('image')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('transporter');
    }
}
