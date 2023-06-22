<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('budget_id');
            $table->unsignedBigInteger('expenses_category_id');
            $table->string('expenses_title');
            $table->string('expenses_amount');
            $table->string('expenses_description');
            $table->date('expenses_date');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('budget_id')->references('id')->on('budgets');
            $table->foreign('expenses_category_id')->references('id')->on('expenses_categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
