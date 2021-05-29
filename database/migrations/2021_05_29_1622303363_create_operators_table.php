<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('phone_number')->nullable()->default('NULL');
		$table->string('password')->nullable()->default('NULL');
		$table->string('image')->nullable()->default('NULL');
		$table->string('name')->nullable()->default('NULL');
		$table->integer('vendor_id',10)->unsigned();
		$table->integer('status',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('operators');
    }
}
