<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->string('full_name');
		$table->string('text')->nullable()->nullable();
		$table->string('image')->nullable()->nullable();
		$table->integer('brand_id')->unsigned()->nullable()->nullable();
		$table->string('barcode1')->nullable()->nullable();
		$table->string('barcode2')->nullable()->nullable();
		$table->integer('active')->default('1');
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
