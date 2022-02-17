<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_books', function (Blueprint $table) {
            $table->id('trans_id');
            $table->date('trans_date');
            $table->string('shift');
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')->references('pump_id')->on('pumps');
            $table->double('opening_meter',10,2);
            $table->double('closing_meter',10,2);
            $table->double('meter_litres',10,2);
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
        Schema::dropIfExists('meter_books');
    }
}
