<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->string('debtor_name');
            $table->integer('amount');
            $table->string('due_date');
            $table->integer('interest_rate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('debts');
    }
};
