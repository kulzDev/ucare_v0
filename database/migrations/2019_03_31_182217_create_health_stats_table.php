<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('patientID')->nullable('false');
            $table->String('height')->nullable('false');
            $table->String('weight')->nullable('false');
            $table->String('blood_glucose')->nullable('false');
            $table->String('blood_pressure')->nullable('false');
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
        Schema::dropIfExists('health_stats');
    }
}
