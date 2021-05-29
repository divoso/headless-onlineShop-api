<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketMessagesTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('ticket_messages', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('ticket_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('customer_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('admin_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('vendor_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('vendor_operator_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('type',11);
		$table->string('text');
		$table->integer('text_type',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('ticket_messages');
    }
}
