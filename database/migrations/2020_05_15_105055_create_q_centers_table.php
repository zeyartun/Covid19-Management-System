<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_centers', function (Blueprint $table) {
            $table->id();
            $table->integer('township_id');
            $table->string('Qcenter_name');
            $table->integer('bed_quantity');
            $table->integer('No_breakfast');
            $table->integer('No_lunch');
            $table->integer('No_dinner');
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
        Schema::dropIfExists('q_centers');
    }
}
