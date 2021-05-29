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

		$table->unsignedInteger('id')->unsigned();
		$table->integer('order_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('customer_id')->unsigned();
		$table->integer('rate')->default(0);
		$table->string('text')->nullable()->nullable();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('order_comments');
    }
}
