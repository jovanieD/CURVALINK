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
            Schema::create('certification_requests', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('firstname');
                $table->string('lastname');
                $table->string('address');
                $table->string('municipality');
                $table->string('province')->nullable();
                $table->string('postal', 6); // Assuming postal code format is valid as a string
                $table->string('phonenumber', 13); // Assuming phone number format is valid as a string
                $table->string('email');
                $table->string('purpose');
                $table->string('status')->default('Pending');
                $table->string('document')->default('Certificate');
                $table->timestamps();
         });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification_requests');
    }
};
