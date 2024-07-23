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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->unsignedBigInteger('promotion_id')->nullable();
            $table->string("status")->default("Waiting for payment"); // waiting for payment, waiting for verification, in progress, completed, canceled
            $table->string("slug")->unique();
            // $table->foreignId("promo_id")->nullable()->constrained("promotions")->onDelete("restrict");
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('restrict');
            // $table->date("transaction_date");
            $table->string('payment_method')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
