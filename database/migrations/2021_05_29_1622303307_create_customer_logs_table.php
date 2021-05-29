<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLogsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('customer_logs', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->string('url')->nullable()->nullable();
		$table->string('ip')->nullable()->nullable();
		$table->string('platform')->nullable()->nullable();
		$table->string('browser')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_logs');
    }
}
