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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('cnic_number');
            $table->string('ntn_number')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('permanent_address');
            $table->string('mailing_address');
            $table->string('facebook_profile')->nullable();
            $table->string('employment_type');
            $table->string('position_applied');
            $table->json('education')->nullable();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
