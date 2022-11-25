<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount');
            $table->string('product');
            $table->string('type')->default('paystack');
            $table->string('status')->default('initialized');
            $table->foreignId('product_id');
            $table->string('reference');
            $table->boolean('deleted')->default(false);
            $table->dateTime('deleted_at')->nullable();
            $table->foreignId('customer_id'); 
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
        Schema::dropIfExists('payments');
    }
}
