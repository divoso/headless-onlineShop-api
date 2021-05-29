<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGcmsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('gcms', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->integer('customer_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('operator_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('transporter_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('vendor_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('dev_type',11)->nullable()->default('NULL');
		$table->string('gcm_id')->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('gcms');
    }
}
