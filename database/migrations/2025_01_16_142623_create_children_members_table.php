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
        Schema::create('children_members', function (Blueprint $table) {
                $table->id();
                $table->string('membership_number');
                $table->string('child_first_name');
                $table->string('child_last_name');
                $table->string('child_personal_number')->unique();
                $table->string('child_address');
                $table->string('child_postal_code');
                $table->string('child_city');
                $table->date('baptism_date')->nullable();
                $table->string('baptism_place')->nullable();
                $table->string('mission_society')->nullable();
                $table->string('guardian1_first_name');
                $table->string('guardian1_last_name');
                $table->string('guardian1_personal_number')->unique();
                $table->string('guardian1_address');
                $table->string('guardian1_postal_code');
                $table->string('guardian1_city');
                $table->string('guardian2_first_name')->nullable();
                $table->string('guardian2_last_name')->nullable();
                $table->string('guardian2_personal_number')->unique()->nullable();
                $table->string('guardian2_address')->nullable();
                $table->string('guardian2_postal_code')->nullable();
                $table->string('guardian2_city')->nullable();
                $table->boolean('consent_to_share')->default(false);
                $table->date('signature_date');
                $table->binary('signatures');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children_members');
    }
};
