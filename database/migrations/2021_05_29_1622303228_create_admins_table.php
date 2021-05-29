<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('name');
		$table->string('email');
		$table->string('password');
		$table->string('remember_token',100)->nullable()->default('NULL');
		$table->timestamp('created_at')->nullable()->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}