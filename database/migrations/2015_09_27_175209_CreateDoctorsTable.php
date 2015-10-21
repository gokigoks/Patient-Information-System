<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doctor_fname');
            $table->string('doctor_mname');
            $table->string('doctor_lname');
            $table->string('doctor_address');
            $table->string('doctor_contact')->nullable();
            $table->integer('medspecialty_id')->unsigned();            
            $table->timestamps();

            $table->foreign('medspecialty_id')
                ->references('id')
                ->on('medspecialties')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctors');
    }
}
