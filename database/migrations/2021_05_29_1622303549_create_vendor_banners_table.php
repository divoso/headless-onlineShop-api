<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorBannersTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_banners', function (Blueprint $table) {

		$table->unsignedInteger('id')->unsigned();
		$table->string('image')->nullable()->nullable();
		$table->integer('type')->default('1');
		$table->integer('section_id')->unsigned()->nullable()->nullable();
		$table->integer('is_web')->default('1');
		$table->integer('status')->default(0);
		$table->integer('vendor_id')->unsigned();
				$table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_banners');
    }
}
