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
        Schema::create('china_product_sales', function (Blueprint $table) {
            $table->id();
            $table->string(column:'client_name', length:50);
            $table->string(column:'prod_name', length:80);
            $table->integer(column:'quantity');
            $table->float(column:'unit_price');
            $table->float(column:'total_price');
            $table->float(column:'advance');
            $table->float(column:'due');
            $table->date(column:'order_date');
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
        Schema::dropIfExists('china_product_sales');
    }
};
