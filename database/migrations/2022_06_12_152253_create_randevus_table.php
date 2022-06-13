<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randevus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('treatmentid');
            $table->string('date');
            $table->string('time');
            $table->foreignId('dentist_id');
            $table->string('ip');
            $table->string('note');
            $table->string('status');

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
        Schema::dropIfExists('randevus');
    }
}
