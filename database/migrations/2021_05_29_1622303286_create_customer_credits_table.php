<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCreditsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('customer_credits', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned();
		$table->integer('amount',11)->default('0');
		$table->integer('type',11)->default('0');
		$table->integer('order_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('is_systemic',11)->default('2');
		$table->string('text',254)->default('افزایش اعتبار کیف پول  ');
		$table->integer('transaction_id',11)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_credits');
    }
}
