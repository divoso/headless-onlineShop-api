<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnStatusTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('return_status', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('return_status');
    }
}
