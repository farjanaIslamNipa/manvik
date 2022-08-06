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
        Schema::create('graphical_sales', function (Blueprint $table) {
            $table->id();
            $table->string(column:'designed_by', length:50);
            $table->string(column:'service_name', length:80);
            $table->string(column:'client', length:80)->nullable();
            $table->integer(column:'quantity');
            $table->float(column:'unit_price');
            $table->float(column:'total_price');
            $table->date(column:'date')->nullable();
            $table->float(column:'paid');
            $table->float(column:'due')->nullable();
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
        Schema::dropIfExists('graphical_sales');
    }
};
