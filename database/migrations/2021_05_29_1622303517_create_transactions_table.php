<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('authority')->nullable()->default('NULL');
		$table->string('refID')->nullable()->default('NULL');
		$table->string('status')->nullable()->default('NULL');
		$table->string('verified')->nullable()->default('NULL');
		$table->integer('customer_id',11)->unsigned();
		$table->integer('amount',11)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
