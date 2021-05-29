<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name');
		$table->integer('parent_id',10)->unsigned()->nullable()->default('NULL');
		$table->string('slug')->nullable()->default('NULL');
		$table->string('image')->nullable()->default('NULL');
		$table->integer('status',11)->default('0');
		$table->integer('type',11)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
