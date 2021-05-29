<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCommentsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('order_comments', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('order_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned();
		$table->integer('rate',11)->default('0');
		$table->string('text')->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('order_comments');
    }
}
