<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayingMethodsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('paying_methods', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->integer('status')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('paying_methods');
    }
}
