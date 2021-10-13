<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->time('time');
            $table->text('comment')->nullable();
            $table->enum('via', ['stopwatch', 'manually'])->default('stopwatch');
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
        Schema::dropIfExists('records');
    }
}
