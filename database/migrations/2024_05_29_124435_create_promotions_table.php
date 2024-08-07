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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("slug")->unique();
            $table->string("code")->unique();
            $table->float("discount");
            $table->string("image")->nullable();
            $table->string("imagebanner")->nullable();
            $table->text("terms");
            $table->string("shortdecs");
            $table->date("startdate");
            $table->date("enddate");
            $table->boolean('disable')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
