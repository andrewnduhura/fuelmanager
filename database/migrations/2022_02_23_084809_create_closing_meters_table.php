<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClosingMetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closing_meters', function (Blueprint $table) {
            $table->id('close_id');
            $table->date('closing_date');
            //shift
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');
            //pump
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')->references('pump_id')->on('pumps');
            //meter count
            $table->double('closing_meter',10,2);
            
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
        Schema::dropIfExists('closing_meters');
    }
}
