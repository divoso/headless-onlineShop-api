<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('subject_id')->unsigned();
		$table->integer('is_close')->default('1');
		$table->integer('customer_id')->unsigned();
		$table->integer('admin_id')->unsigned();
		$table->integer('vendor_id')->unsigned();
		$table->integer('is_vendor')->unsigned()->default(0);
		$table->integer('vendor_operator_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
