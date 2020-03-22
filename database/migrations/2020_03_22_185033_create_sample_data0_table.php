<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleData0Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_data0', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permissions_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('e_mail');
            $table->string('address');
            $table->string('city');
            $table->integer('postal_number');
            $table->string('phone_number', 13);
            $table->string('country');
            $table->date('birth_date');
            $table->string('hometown');
            $table->string('country_of_birth');
            $table->string('citizenship');
            $table->longText('note');
            $table->string('picture');
            $table->string('proof_of_payment');
            $table->string('statement');
            $table->date('member_from');
            $table->ipAddress('ip_address');
            $table->integer('active');
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
        Schema::dropIfExists('sample_data0');
    }
}
