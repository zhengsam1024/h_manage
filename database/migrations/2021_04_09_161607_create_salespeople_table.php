<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalespeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salespeoples', function (Blueprint $table) {
            $table->id();
            $table->string('account')->uniqid();
            $table->string('password');
            $table->date('last_logined')->nullable();
            $table->timestamps();
        });

        Schema::create('salespeople_data', function (Blueprint $table) {
            $table->unsignedBigInteger('sales_id')->primary();
            $table->foreign('sales_id')->on('salespeoples')->references('id');
            $table->string('name');
            $table->json('phones');
            $table->string('line_id')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('salespeople');
        Schema::dropIfExists('salespeople_data');
    }
}
