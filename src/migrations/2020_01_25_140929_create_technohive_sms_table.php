<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnohiveSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technohive_sms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('response_code');
            $table->string('response_description');
            $table->string('mobile_number')->nullable();
            $table->string('message_id')->nullable();
            $table->string('network_id')->nullable();
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
        Schema::dropIfExists('technohive_sms');
    }
}
