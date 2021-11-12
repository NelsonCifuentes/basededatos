<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('last_name',45);
            $table->date('date_of_birth');
            $table->string('place_of_birth',45);
            $table->date('date_of_issuance_of_the_ID');
            $table->string('email',45);
            $table->string('cell_phone_number',10);
            $table->string('phone_number',10);
            $table->string('address',45);
            $table->string('number_of_children',45);
            $table->string('gender',20);
            $table->string('fhotography',45);

            $table->unsignedBigInteger('novelties_id');
            $table->foreign('novelties_id')->references('id')->on('novelties');

            $table->unsignedBigInteger('accounting_id');
            $table->foreign('accounting_id')->references('id')->on('accounting');

            $table->unsignedBigInteger('charge_id');
            $table->foreign('charge_id')->references('id')->on('charge');

            $table->unsignedBigInteger('bank_information_id');
            $table->foreign('bank_information_id')->references('id')->on('bank_information');

            $table->unsignedBigInteger('contract_id');
            $table->foreign('contract_id')->references('id')->on('contract');

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');

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
        Schema::dropIfExists('employee');
    }
}
