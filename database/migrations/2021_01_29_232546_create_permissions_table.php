<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permissions', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('key');
        //     $table->unsignedBigInteger('department_id')->nullable();
        //     $table->unsignedBigInteger('user_id')->nullable();
        //     $table->timestamps();

        //     $table->foreign('department_id')->references('id')->on('departments');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
