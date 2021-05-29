<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorBannersTable extends Migration
{    // TODO relations
    public function up()
    {
        Schema::create('vendor_banners', function (Blueprint $table) {

		$table->integer('id',10)->unsigned();
		$table->string('image')->nullable()->default('NULL');
		$table->integer('type',11)->default('1');
		$table->integer('section_id',10)->unsigned()->nullable()->default('NULL');
		$table->integer('is_web',11)->default('1');
		$table->integer('status',1)->default('0');
		$table->integer('vendor_id',10)->unsigned();
		$table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
		$table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        });
    }

    public function down()
    {
        Schema::dropIfExists('vendor_banners');
    }
}
