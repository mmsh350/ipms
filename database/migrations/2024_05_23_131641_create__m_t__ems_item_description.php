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
        Schema::create('MT_EmsItemDescription', function (Blueprint $table) {
            $table->integer('DescriptionId');
            $table->string('Description')->nullable();
            $table->integer('StatusId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MT_EmsItemDescription');
    }
};
