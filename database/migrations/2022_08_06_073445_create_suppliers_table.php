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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name', length:50);
            $table->string(column:'email', length:80)->nullable();
            $table->integer(column:'phone');
            $table->string(column:'prod_name', length:100);
            $table->integer(column:'quantity')->default(1);
            $table->float(column:'unit_price');
            $table->float(column:'total_price');
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
        Schema::dropIfExists('suppliers');
    }
};
