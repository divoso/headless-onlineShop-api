<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionProductsTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('section_products', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->integer('section_id')->unsigned();
		$table->integer('vendor_product_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('section_products');
    }
}
