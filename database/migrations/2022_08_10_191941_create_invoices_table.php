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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('restrict');
            $table->decimal('nettotal','15','2');
            $table->decimal('discount','15','2');
            $table->decimal('grandtotal','15','2');
            $table->text('comment');
            $table->bigInteger('payment_type')->unsigned();
            $table->foreign('payment_type')->references('id')->on('accounts')->onDelete('restrict');
            $table->text('trxId')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
};
