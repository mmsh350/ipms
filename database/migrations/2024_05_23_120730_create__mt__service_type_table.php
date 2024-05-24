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
        Schema::create('MT_ServiceType', function (Blueprint $table) {
            $table->integer('ServiceID');
            $table->string('ServiceName')->nullable();
            $table->float('ServiceCharge', 10, 5)->default(0)->nullable();
            $table->integer('StatusId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MT_ServiceType');
    }
};
