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
        Schema::create('information_one', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('nid');
            $table->string('utin');
            $table->string('tin');
            $table->string('phone');
            $table->string('wife_husband_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('employer_business_type');
            $table->string('circle');
            $table->string('taxes_zone');
            $table->string('assessment_year');
            $table->string('residential');
            $table->string('vat_reg_number');
            $table->string('presentation_address');
            $table->string('permanent_address');
            $table->string('residential_status');
            $table->string('status');
            $table->string('date_of_birth');
            $table->string('time');
            $table->string('date');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
