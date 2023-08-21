<?php

use App\Models\Activity;
use App\Models\Team;
use App\Models\User;
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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('announcement_content');
            $table->string('announcement_image_path')->nullable();
            // $table->foreignIdFor(User::class);
            // $table->foreignIdFor(Team::class);

            $table->unsignedBigInteger('organizer_id');
            $table->foreign('organizer_id')->references('id')->on('users'); //หัวหน้าใหญ่ประกาศ

            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');     

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
