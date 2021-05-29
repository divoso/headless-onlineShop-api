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

		$table->unsignedInteger('id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->integer('amount')->default(0);
		$table->integer('type')->default(0);
		$table->integer('order_id')->unsigned()->nullable()->nullable();
		$table->integer('is_systemic')->default('2');
		$table->string('text',254)->default('افزایش اعتبار کیف پول  ');
		$table->integer('transaction_id')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_credits');
    }
}
