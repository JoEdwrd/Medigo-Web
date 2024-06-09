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
            $table->foreignId("user_id")->constrained("users")->onDelete("restrict");
            $table->string("status")->default("Wating for payment");
            $table->string("slug")->unique();
            $table->foreignId("promo_id")->nullable()->constrained("users")->onDelete("restrict");
            $table->date("transaction_date");
            $table->string('payment_method');
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