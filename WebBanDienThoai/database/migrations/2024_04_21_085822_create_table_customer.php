<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_customer', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->string('cus_email',100);
            $table->string('cus_password');
            $table->string('cus_phone');
            $table->string('cus_address');
            $table->string('cus_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_customer');
    }
};
