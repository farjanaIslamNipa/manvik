<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->string('position');
            $table->string('month');
            $table->string('year');
            $table->tinyInteger('status')->default(1)->comment('1:paid, 0:unpaid')->nullable();
            $table->double('advance')->nullable();
            $table->double('paid');
            $table->double('paid_total');
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
        Schema::dropIfExists('salaries');
    }
};
