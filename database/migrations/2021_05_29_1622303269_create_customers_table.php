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

		$table->integer('id',10)->unsigned();
		$table->string('name')->nullable()->default('NULL');
		$table->string('phone_number');
		$table->string('password')->nullable()->default('NULL');
		$table->string('api_key')->nullable()->default('NULL');
		$table->integer('activation_code',11);
		$table->datetime('activation_ts')->nullable()->default('NULL');
		$table->integer('active',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
