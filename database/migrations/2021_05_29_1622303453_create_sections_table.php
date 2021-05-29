<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name');
		$table->integer('type',11)->default('0');
		$table->string('image');
		$table->integer('vendor_id',10)->unsigned()->nullable()->default('NULL');
		$table->string('bg_color');
		$table->integer('status',11)->default('0');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
