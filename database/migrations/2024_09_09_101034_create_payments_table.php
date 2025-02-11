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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->foreignId('order_id')
            ->constrained('orders')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_date');
            $table->string('payment_time');
            $table->string('payment_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
