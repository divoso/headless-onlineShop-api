<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
