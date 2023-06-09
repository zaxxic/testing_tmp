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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('logo', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('item_id')->constrained('item')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customer')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('discount1');
            $table->string('notes')->nullable();
            $table->string('attachment')->nullable();
            $table->string('footer')->nullable();
            $table->decimal('total_pay', 8, 2);
            $table->foreignId('company_id')->constrained('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
