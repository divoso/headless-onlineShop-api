<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketMessagesTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('ticket_messages', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('ticket_id')->unsigned()->nullable()->nullable();
		$table->integer('customer_id')->unsigned()->nullable()->nullable();
		$table->integer('admin_id')->unsigned()->nullable()->nullable();
		$table->integer('vendor_id')->unsigned()->nullable()->nullable();
		$table->integer('vendor_operator_id')->unsigned()->nullable()->nullable();
		$table->integer('type');
		$table->string('text');
		$table->integer('text_type')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('ticket_messages');
    }
}
