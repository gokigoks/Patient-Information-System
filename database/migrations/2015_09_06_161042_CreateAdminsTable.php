<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('adminid')->primary();
            $table->string('adminlname',50);
            $table->string('adminfname',50);
            $table->string('adminmname',50)->nullable();
            $table->string('adminemail',100);
            $table->string('adminpass',50);
            $table->string('adminaddress',100);
            $table->string('admingender',10);
            $table->string('adminnumber',20);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
