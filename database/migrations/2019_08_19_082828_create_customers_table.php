<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('logo');
            $table->string('phone');
            $table->text('address');
            $table->integer('type_id')->default(1);
            $table->integer('townships_id');
            $table->integer('user_id')->nullable();
            $table->integer('confirm_user_id')->nullable();
            $table->integer('status')->default(0);
            $table->integer('recordstatus')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
