<?php

use App\Models\Activity;
use App\Models\RegisteredList;
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
        Schema::create('activity_registered_list', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RegisteredList::class);
            $table->foreignIdFor(Activity::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_registered_list');
    }
};
