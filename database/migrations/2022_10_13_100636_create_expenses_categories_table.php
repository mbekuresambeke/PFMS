<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expenses_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('expenses_id');
            $table->string('expenses_category_name');
            $table->string('expenses_category_desc');
            $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('expenses_id')->references('id')->on('expenses');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses_categories');
    }
};
