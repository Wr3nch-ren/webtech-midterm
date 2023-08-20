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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title_tasks');
            $table->string('detail_tasks');
            $table->boolean('is_finish')->default(false);

            $table->unsignedBigInteger('tasklist_id');
            $table->foreign('tasklist_id')->references('id')->on('tasklists');

            $table->unsignedBigInteger('assign_user_id');
            $table->foreign('assign_user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
