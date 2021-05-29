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

		$table->integer('id',10)->unsigned();
		$table->integer('product_id',10)->unsigned();
		$table->integer('category_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
