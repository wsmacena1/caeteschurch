<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('number', 10);
            $table->string('complement', 45);
            $table->unsignedBigInteger('address_type_id');
            $table->unsignedBigInteger('neighborhood');
            $table->timestamps();

            $table->foreign('address_type_id')->references('id')->on('address_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
