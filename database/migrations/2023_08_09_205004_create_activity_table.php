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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->date('dateline');
            $table->string('activity_type');
            $table->unsignedInteger('activity_hours');
            $table->date('activity_date');
            $table->unsignedInteger('participant_number');
            $table->double('activity_fee');
            $table->string('activity_place');
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('description');
            $table->string('contact');
            $table->string('poster');
            $table->double('budget');
            $table->unsignedInteger('working_team_number');
            $table->boolean('verify')->default(false);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
