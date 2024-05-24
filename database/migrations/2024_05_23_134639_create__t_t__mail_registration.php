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
        Schema::create('TT_MailRegistration', function (Blueprint $table) {
            $table->integer('EMSId');
            $table->string('MailItemId');
            $table->integer('MailClassId')->nullable();
            $table->dateTime('TransactionDate')->nullable();
            $table->string('TransactionTime')->nullable();
            $table->integer('ServiceTypeId')->nullable();
            $table->string('SourcePostOfficeName')->nullable();
            $table->string('DestinationPostOfficeName')->nullable();
            $table->string('Zone')->nullable();
            $table->string('ContentCategory')->nullable();
            $table->string('MailContent')->nullable();

            $table->string('SenderFirstName')->nullable();
            $table->string('SenderMiddleName')->nullable();
            $table->string('SenderLastName')->nullable();
            $table->string('SenderAddress')->nullable();
            $table->string('SenderTown')->nullable();
            $table->string('SenderTelephone')->nullable();
            $table->string('SenderMobile')->nullable();
            $table->string('SenderEmail')->nullable();

            $table->string('ReceiverFirstname')->nullable();
            $table->string('ReceiverMiddleName')->nullable();
            $table->string('ReceiverLastName')->nullable();
            $table->string('ReceiverAddress')->nullable();
            $table->string('ReceiverTown')->nullable();
            $table->string('ReceiverTelephone')->nullable();
            $table->string('ReceiverMobile')->nullable();
            $table->string('ReceiverEmail')->nullable();

            $table->integer('PaymentTypeId')->nullable()->default(1);
            $table->integer('DescriptionId')->nullable()->default(1);
            $table->integer('MailRegistrationTypeId')->nullable()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TT_MailRegistration');
    }
};
