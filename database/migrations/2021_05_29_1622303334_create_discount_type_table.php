<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountTypeTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('discount_type', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('title',128);
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('discount_type');
    }
}
