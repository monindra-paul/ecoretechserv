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
        Schema::create('create_token', function (Blueprint $table) {
            $table->id();
            $table->string('warranty_info');
            $table->string('name',50);
            $table->string('mobile',10);
            $table->string('email')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('product_name')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('model_no')->nullable();
            $table->string('address')->nullable();
            $table->string('issue')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_delivered')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
