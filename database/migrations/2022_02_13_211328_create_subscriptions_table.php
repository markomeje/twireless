<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('sector_id');
            $table->string('plan')->nullable();
            $table->foreignId('plan_id');

            $table->timestamp('start_date')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->string('antenna')->nullable();
            $table->string('router')->nullable();
            $table->string('polewire_length')->nullable();

            $table->integer('renewals')->nullable();
            $table->string('coordinate')->nullable();
            $table->string('last_mile')->nullable();
            $table->string('concurrent_users')->nullable();
            $table->timestamp('installation_date')->nullable();
            $table->text('additional_info')->nullable();

            $table->string('status')->default('initialized');
            $table->boolean('active')->default(false);

            $table->boolean('deleted')->default(false);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
