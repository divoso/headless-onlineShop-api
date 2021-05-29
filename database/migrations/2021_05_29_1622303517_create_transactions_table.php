<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('authority')->nullable()->nullable();
		$table->string('refID')->nullable()->nullable();
		$table->string('status')->nullable()->nullable();
		$table->string('verified')->nullable()->nullable();
		$table->integer('customer_id')->unsigned();
		$table->integer('amount')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
