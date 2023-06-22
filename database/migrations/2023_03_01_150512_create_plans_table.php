<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('plan_title');
             $table->decimal('plan_estimate_price', 19, 2)->unsigned();
             $table->text('category');
             $table->string('duration');
             $table->string('plan_status');
             $table->string('action');
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans');
    }
};
