<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoveltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelties', function (Blueprint $table) {
            $table->id();
            $table->string('total_hours_worked',8);
            $table->TEXT('description_of_novelty',200);	
            $table->string('disability_days',8);
            $table->string('leave_days',8);

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');

            $table->unsignedBigInteger('accounting_id');
            $table->foreign('accounting_id')->references('id')->on('accounting');

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
        Schema::dropIfExists('novelties');
    }
}
