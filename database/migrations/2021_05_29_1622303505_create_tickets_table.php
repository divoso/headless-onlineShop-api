<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('subject_id',10)->unsigned();
		$table->integer('is_close',11)->default('1');
		$table->integer('customer_id',10)->unsigned();
		$table->integer('admin_id',10)->unsigned();
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('is_vendor',10)->unsigned()->default('0');
		$table->integer('vendor_operator_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
