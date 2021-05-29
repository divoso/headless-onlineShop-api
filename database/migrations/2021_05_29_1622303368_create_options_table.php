<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name')->nullable()->nullable();
		$table->text('value');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('options');
    }
}
