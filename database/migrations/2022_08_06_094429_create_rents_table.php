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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string(column:'rent_type', length:100);
            $table->string(column:'month', length:20);
            $table->string(column:'year', length:10);
            $table->float(column:'rent_amount');
            $table->float(column:'paid');
            $table->float(column:'due')->nullable();
            $table->date(column:'date')->nullable();
            $table->string(column:'note')->nullable();
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
        Schema::dropIfExists('rents');
    }
};
