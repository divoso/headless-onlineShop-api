<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name')->nullable()->default('NULL');
		$table->string('company_name')->nullable()->default('NULL');
		$table->string('password')->nullable()->default('NULL');
		$table->string('api_key')->nullable()->default('NULL');
		$table->integer('activation_code',11)->nullable()->default('NULL');
		$table->string('phone_number');
		$table->string('shaba')->nullable()->default('NULL');
		$table->integer('pay_type',11)->default('0');
		$table->string('company_phone')->nullable()->default('NULL');
		$table->integer('active',11)->default('0');
		$table->integer('open',11)->default('8');
		$table->integer('close',11)->default('22');
		$table->string('arrive_time')->nullable()->default('NULL')->default('0');
		$table->text('address');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
