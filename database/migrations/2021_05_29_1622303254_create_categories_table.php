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

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->integer('parent_id')->unsigned()->nullable()->nullable();
		$table->string('slug')->nullable()->nullable();
		$table->string('image')->nullable()->nullable();
		$table->integer('status')->default(0);
		$table->integer('type')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
