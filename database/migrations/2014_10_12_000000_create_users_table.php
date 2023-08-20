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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth');
            $table->string('name_title');
            $table->string('name');
            $table->string('surname');

            $table->string('student_code')->nullable();
            $table->string('nickname')->nullable();
            // $table->foreignIdFor(\App\Models\Activity::class);
            // // $table->foreignIdFor(\App\Models\Campus::class);
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->integer('year')->nullable();
            $table->string('phone')->nullable();
            $table->string('line_id')->nullable();
            $table->string('facebook')->nullable();
            $table->string('allergy')->nullable();
            $table->string('image_path')->nullable();
            $table->string('role')->default('NORMAL');
            $table->foreignIdFor(\App\Models\Certificate::class)->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
