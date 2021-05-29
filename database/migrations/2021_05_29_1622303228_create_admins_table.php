<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('name');
		$table->string('email');
		$table->string('password');
		$table->string('remember_token',100)->nullable()->nullable();
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
