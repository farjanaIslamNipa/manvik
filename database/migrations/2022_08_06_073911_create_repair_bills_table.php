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
        Schema::create('repair_bills', function (Blueprint $table) {
            $table->id();
            $table->string(column:'shop_name', length:50)->nullable();
            $table->integer(column:'shop_phone')->nullable();
            $table->string(column:'equipment_name', length:100);
            $table->integer(column:'quantity')->nullable();
            $table->float(column:'repair_cost');
            $table->float(column:'total_cost');
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
        Schema::dropIfExists('repair_bills');
    }
};
