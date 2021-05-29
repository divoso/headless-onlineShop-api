<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('product_id')->unsigned();
		$table->integer('category_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
