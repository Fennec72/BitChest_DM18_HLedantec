<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quotationhistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotationhistories', function (Blueprint $table) {
            $table->bigIncrements('id_quotation');
            $table->unsignedBigInteger('id_crypto');
            $table->foreign('id_crypto')->references('id_crypto')->on('cryptos')->onDelete('cascade');
            $table->float('valueCotation');
            $table->timestamp('value_date');
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
        Schema::dropIfExists('quotationhistory');
    }
}
