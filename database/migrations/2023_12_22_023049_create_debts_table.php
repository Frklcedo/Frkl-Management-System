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
        Schema::create('debts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->decimal('value', 10, 2);
            $table->date('date');
            $table->enum('status', \App\Models\Debt::$status);
            $table->boolean('constant');

            $table->foreignIdFor(\App\Models\Profile::class)->constrained();
            $table->foreignIdFor(\App\Models\Creditor::class)->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};
