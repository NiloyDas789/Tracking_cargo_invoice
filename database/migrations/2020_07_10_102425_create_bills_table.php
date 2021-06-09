<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bill_no')->unique();
            $table->string('shipper_name');
            $table->string('shipper_address');
            $table->string('shipper_number');
            $table->string('reciever_name');
            $table->string('reciever_address');
            $table->string('reciever_number');
            $table->string('payment_value');
            $table->string('value');
            $table->string('deliveredby');
            
            $table->bigInteger('total');
            $table->string('total_string');
            $table->string('date');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('bills');
    }
}
