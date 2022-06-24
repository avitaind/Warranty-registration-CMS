<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('product_model_id')->unsigned()->index();
            $table->string('product_number');
            $table->string('titleName')->nullable();
            $table->string('serial_number')->unique()->nullable();
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
        Schema::dropIfExists('product_numbers');
    }
}
