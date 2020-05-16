<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('q_center_id');
            $table->string('patient_name');
            $table->string('patient_status');
            $table->string('patient_ph');
            $table->string('patient_address');
            $table->integer('patient_age');
            $table->string('patient_gender');
            $table->date('Q_at');
            $table->date('Q_end');
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
        Schema::dropIfExists('patients');
    }
}
