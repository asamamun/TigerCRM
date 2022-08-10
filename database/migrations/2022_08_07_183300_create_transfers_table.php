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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sender_account')->unsigned();
            $table->foreign('sender_account')->references('id')->on('accounts')->onDelete('restrict');
            $table->bigInteger('receiver_account')->unsigned();
            $table->foreign('receiver_account')->references('id')->on('accounts')->onDelete('restrict');
            $table->decimal('amount','15','2');
            $table->string('description');
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
        Schema::dropIfExists('transfers');
    }
};
