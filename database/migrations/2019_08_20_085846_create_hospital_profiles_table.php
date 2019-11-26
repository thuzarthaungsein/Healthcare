<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->text('access')->nullable();
            $table->text('medical_department')->nullable();
            $table->string('specialist')->nullable();
            $table->string('gallery')->nullable();
            $table->text('details_info')->nullable();
            $table->string('subject')->nullable();
            $table->text('closed_day')->nullable();
            $table->text('facilities')->nullable();
            $table->text('website')->nullable();
            $table->text('special_features')->nullable();
            $table->text('congestion')->nullable();
            $table->double('latitude',10,8)->nullable();
            $table->double('longitude',10,8)->nullable();
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
        Schema::dropIfExists('hospital_profiles');
    }
}
