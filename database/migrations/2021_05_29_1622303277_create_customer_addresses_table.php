<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('region')->nullable()->nullable();
		$table->string('full_address');
		$table->string('opt_number')->nullable()->nullable();
		$table->string('phone_number')->nullable()->nullable();
		$table->string('name')->nullable()->nullable();
		$table->string('door')->nullable()->nullable();
		$table->string('floor')->nullable()->nullable();
		;
		;
		$table->string('title');
		$table->integer('customer_id')->unsigned();
		$table->integer('is_deleted')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
