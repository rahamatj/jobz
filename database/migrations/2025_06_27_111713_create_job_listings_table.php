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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('company');
            $table->string('email');
            $table->string('phone_number');
            $table->string('website');
            $table->date('application_deadline');
            $table->unsignedTinyInteger('vacancy');
            $table->unsignedTinyInteger('experience');
            $table->date('published');
            $table->unsignedSmallInteger('salary');
            $table->text('requirements')->nullable()->default(null);
            $table->text('responsibilities')->nullable()->default(null);
            $table->text('skills')->nullable()->default(null);
            $table->text('benefits')->nullable()->default(null);
            $table->enum('work_place', ['onsite', 'remote'])->default('onsite');
            $table->enum('employment_status', ['full time', 'part time'])->default('full time');
            $table->text('company_address')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
