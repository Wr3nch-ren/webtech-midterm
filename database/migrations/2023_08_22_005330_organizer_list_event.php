<?php

use App\Models\Activity;
use App\Models\OrganizerList;
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
        Schema::create('activity_organizer_list', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(OrganizerList::class);
            $table->foreignIdFor(Activity::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_organizer_list');
    }
};
