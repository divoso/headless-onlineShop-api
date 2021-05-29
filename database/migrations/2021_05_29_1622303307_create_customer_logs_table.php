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

		$table->integer('id',10)->unsigned();
		$table->integer('customer_Id',10)->unsigned();
		$table->string('url')->nullable()->default('NULL');
		$table->string('ip')->nullable()->default('NULL');
		$table->string('platform')->nullable()->default('NULL');
		$table->string('browser')->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_logs');
    }
}
