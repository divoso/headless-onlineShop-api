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

		$table->unsignedInteger('id')->unsigned();
		$table->string('phone_number')->nullable()->nullable();
		$table->string('password')->nullable()->nullable();
		$table->string('image')->nullable()->nullable();
		$table->string('name')->nullable()->nullable();
		$table->integer('vendor_id')->unsigned();
		$table->integer('status')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('operators');
    }
}
