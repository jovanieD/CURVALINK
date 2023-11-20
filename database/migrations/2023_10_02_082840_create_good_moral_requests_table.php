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
        Schema::create('good_moral_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('idnumber');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('purpose');
            $table->string('requestorfirstname');
            $table->string('requestorlastname');
            $table->string('requestorsaddress');
            $table->string('requestorscity');
            $table->string('requestorsprovince');
            $table->string('status')->default('Pending');
            $table->string('document')->default('Good_Moral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('good_moral_requests');
    }
};
