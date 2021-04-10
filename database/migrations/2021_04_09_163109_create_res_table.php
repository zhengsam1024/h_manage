<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('res', function (Blueprint $table) {
            $table->uuid('uid');
            $table->string('name');
            $table->boolean('rent_flag')->default(false);
            $table->boolean('sell_flag')->default(false);
            $table->decimal('rent_price', 8, 2);
            $table->decimal('sell_price', 13, 2);
            $table->unsignedBigInteger('res_type_id');
            $table->string('pattern');
            $table->decimal('footage', 8, 2);
            $table->string('address');
            $table->integer('total_floor')->default(1);
            $table->integer('floor')->default(1);
            $table->unsignedBigInteger('salespeople_id');
            $table->foreign('salespeople_id')->on('salespeoples')->references('id');
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
        Schema::dropIfExists('res');
        Schema::dropIfExists('res_type');
    }
}
