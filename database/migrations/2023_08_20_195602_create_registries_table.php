<?php

use App\Models\Activity;
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
        Schema::create('registries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Activity::class);
            // $table->unsignedBigInteger('team_id');
            // $table->foreign('team_id')->references('id')->on('teams');
            // $table->foreignIdFor(User::class);

            $table->string('status');       //"REGISTERED"  "CONFIRM" "DECLINE"

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registries');
    }
};
