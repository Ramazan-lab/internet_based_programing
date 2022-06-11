<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("title");
            $table->string("keywords");
            $table->string("description");
            $table->string("image")->nullable();
            $table->foreignId("categoryid");
            $table->text("detail");
            $table->float("price")->nullable();
            $table->foreignId("userid");
            $table->boolean("status");
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
        Schema::dropIfExists('treatments');
    }
}
