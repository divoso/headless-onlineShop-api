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

		$table->integer('id',10)->unsigned();
		$table->string('name');
		$table->string('full_name');
		$table->string('text')->nullable()->default('NULL');
		$table->string('image')->nullable()->default('NULL');
		$table->integer('brand_id',10)->unsigned()->nullable()->default('NULL');
		$table->string('barcode1')->nullable()->default('NULL');
		$table->string('barcode2')->nullable()->default('NULL');
		$table->integer('active',11)->default('1');
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
