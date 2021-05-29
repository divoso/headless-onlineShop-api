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

		$table->integer('id',10)->unsigned();
		$table->string('region')->nullable()->default('NULL');
		$table->string('full_address');
		$table->string('opt_number')->nullable()->default('NULL');
		$table->string('phone_number')->nullable()->default('NULL');
		$table->string('name')->nullable()->default('NULL');
		$table->string('door')->nullable()->default('NULL');
		$table->string('floor')->nullable()->default('NULL');
		;
		;
		$table->string('title');
		$table->integer('customer_id',10)->unsigned();
		$table->integer('is_deleted',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
