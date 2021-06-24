<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string('First_Name', 100)->nullable(false);
            $table->string('Last_Name', 100)->nullable(false);
            $table->unsignedBigInteger('Company');
            $table->foreign('Company')->references('ID')->on('companies');
            $table->text('Email')->nullable(true);
            $table->string('Phone', 100)->nullable(false);
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
        Schema::dropIfExists('employees');
    }
}
