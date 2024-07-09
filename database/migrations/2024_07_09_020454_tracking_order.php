<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracking_order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('transaction_id');
            $table->dateTime('waiting_for_verification')->nullable();
            $table->dateTime('waiting_for_payment')->nullable();
            $table->dateTime('already_paid')->nullable();
            $table->dateTime('on_the_way')->nullable();
            $table->dateTime('completed')->nullable();

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
