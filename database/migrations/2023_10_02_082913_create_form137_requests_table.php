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
        Schema::create('form137_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('principalname');
            $table->string('name');
            $table->string('grade');
            $table->string('schoolyear');
            $table->string('adviser');
            $table->string('requestorname');
            $table->string('request');
            $table->string('remarks')->nullable();
            $table->string('status')->default('Pending');
            $table->string('document')->default('Your_Document_Name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form137_requests');
    }
};
