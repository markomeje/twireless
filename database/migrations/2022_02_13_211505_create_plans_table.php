<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('price')->nullable();
            $table->string('size')->nullable();
            $table->string('speed')->nullable();
            $table->string('bandwidth')->nullable();
            $table->text('connections')->nullable();
            $table->foreignId('bundle_id')->nullable();
            $table->boolean('monthly')->default(false);
            $table->foreignId('package_id')->nullable();
            $table->bigInteger('duration');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('plans');
    }
}
