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
        Schema::create('members', function (Blueprint $table) {
                $table->id();
                $table->string('membership_number');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('personal_number')->unique();
                $table->string('address');
                $table->string('postal_code');
                $table->string('city');
                $table->string('mobile_phone')->unique();
                $table->string('email')->unique();
                $table->string('citizenship');
                $table->string('mission_society')->nullable();
                $table->boolean('consent_to_share')->default(false);
                $table->date('signature_date');
                $table->binary('signature');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
