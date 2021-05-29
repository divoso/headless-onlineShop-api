<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name')->nullable()->nullable();
		$table->string('company_name')->nullable()->nullable();
		$table->string('password')->nullable()->nullable();
		$table->string('api_key')->nullable()->nullable();
		$table->integer('activation_code')->nullable()->nullable();
		$table->string('phone_number');
		$table->string('shaba')->nullable()->nullable();
		$table->integer('pay_type')->default(0);
		$table->string('company_phone')->nullable()->nullable();
		$table->integer('active')->default(0);
		$table->integer('open')->default('8');
		$table->integer('close')->default('22');
		$table->string('arrive_time')->nullable()->nullable()->default('0');
		$table->text('address');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
