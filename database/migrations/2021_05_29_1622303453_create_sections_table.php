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

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->integer('type')->default(0);
		$table->string('image');
		$table->integer('vendor_id')->unsigned()->nullable()->nullable();
		$table->string('bg_color');
		$table->integer('status')->default(0);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
