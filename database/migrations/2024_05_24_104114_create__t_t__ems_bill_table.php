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
        Schema::create('TT_EmsBill', function (Blueprint $table) {

            $table->id();
            $table->string('TotalAmount')->nullable();
            $table->string('MailItemId');
            $table->string('Weight')->nullable();
            $table->string('Box1')->nullable();
            $table->string('Box2')->nullable();
            $table->string('Box3')->nullable();
            $table->string('Box4')->nullable();
            $table->string('Box5')->nullable();

            $table->integer('Qty1')->nullable();
            $table->integer('Qty2')->nullable();
            $table->integer('Qty3')->nullable();
            $table->integer('Qty4')->nullable();
            $table->integer('Qty5')->nullable();

            $table->string('Amt1')->nullable();
            $table->string('Amt2')->nullable();
            $table->string('Amt3')->nullable();
            $table->string('Amt4')->nullable();
            $table->string('Amt5')->nullable();

            $table->string('Rate1')->nullable();
            $table->string('Rate2')->nullable();
            $table->string('Rate3')->nullable();
            $table->string('Rate4')->nullable();
            $table->string('Rate5')->nullable();

            $table->string('TarrifAmount')->nullable();
            $table->string('ServiceCharges')->nullable();
            $table->string('Packaging')->nullable();
            $table->string('Forwarding')->nullable();
            $table->integer('Wrapper_Qty')->nullable();
            $table->integer('Wrapper_Amt')->nullable();
            $table->integer('PrepaidDiscount')->nullable();
            $table->integer('CashDiscount')->nullable();
            $table->float('Vat')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TT_EmsBill');
    }
};
