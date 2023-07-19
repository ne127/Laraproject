<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXXXTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_x_x_transactions', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->unsignedBigInteger('up_id');
            $table->foreign('up_id')->references('id')->on('x_x_x_masters')->cascadeOnUpdate();
            $table->string('content');
            $table->dateTime('date_time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_x_x_transactions');
    }
}
