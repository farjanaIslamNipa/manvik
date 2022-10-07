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
        Schema::create('seller_codes', function (Blueprint $table) {
            $table->id();
            $table->string(column:'given_by', length:50);
            $table->string(column:'given_to', length:50);
            $table->string(column:'sales_type', length:20)->nullable();
            $table->string(column:'seller_code');
            $table->float(column:'code_fee');
            $table->float(column:'discount')->nullable();
            $table->float(column:'paid');
            $table->float(column:'due')->nullable();
            $table->date(column:'issue_date');
            $table->date(column:'valid_date');
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
        Schema::dropIfExists('seller_codes');
    }
};
