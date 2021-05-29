<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    // TODO relations
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name');
		;
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('commissions');
    }
}
