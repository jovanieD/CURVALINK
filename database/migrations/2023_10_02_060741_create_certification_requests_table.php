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
                $table->string('department');
                $table->string('lastschoolyear');
                $table->string('province')->nullable();
                $table->string('postal'); 
                $table->string('phonenumber'); 
                $table->string('email');
                $table->string('purpose');
                $table->string('releasedate')->nullable();
                $table->string('remarks')->nullable();
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
