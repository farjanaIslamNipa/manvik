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
        Schema::create('merchant_sales', function (Blueprint $table) {
            $table->id();
            $table->string(column:'seller_name', length:50)->nullable();
            $table->string(column:'buyer_name', length:50)->nullable();
            $table->string(column:'sales_type', length:20)->nullable();
            $table->string(column:'prod_name', length:50);
            $table->string(column:'code', length:50);
            $table->string(column:'color', length:50);
            $table->string(column:'size', length:50);
            $table->integer(column:'quantity');
            $table->float(column:'unit_price');
            $table->float(column:'total_price');
            $table->float(column:'discount')->nullable();
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
        Schema::dropIfExists('merchant_sales');
    }
};
