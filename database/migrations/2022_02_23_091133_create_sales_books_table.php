<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_books', function (Blueprint $table) {
            $table->id('sales-id');
            $table->date('sales_date');
            //sift
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');
            //pump
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')->references('pump_id')->on('pumps');
            //product per pump
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            //difference in the meter readings
            $table->double('litres',10,2);
            //rate per liter->from prices
            $table->double('rate',10,2);
            //amount = rate*liters
            $table->double('sales_total',20,2);
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
        Schema::dropIfExists('sales_books');
    }
}
