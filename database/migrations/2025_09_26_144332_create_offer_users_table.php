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
        Schema::create('offer_users', function (Blueprint $table) {
            $table->id();
            $table->longText('offer');
            $table->unsignedBigInteger('user_id');
            $table->string('offered_asset')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->boolean('accepted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_users');
    }
};
