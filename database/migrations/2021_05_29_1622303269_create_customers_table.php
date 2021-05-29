<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name')->nullable()->nullable();
		$table->string('phone_number');
		$table->string('password')->nullable()->nullable();
		$table->string('api_key')->nullable()->nullable();
		$table->integer('activation_code');
		$table->datetime('activation_ts')->nullable()->nullable();
		$table->integer('active')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
