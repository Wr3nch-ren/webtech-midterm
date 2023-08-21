<?php

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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->date('deadline'); // วันที่ปิดการลงทะเบียน
            $table->string('activity_type'); //รูปแบบจัดกิจกรรม
            $table->string('activity_category'); //ประเภทจัดกิจกรรม
            $table->unsignedInteger('activity_hours')->default(1);
            // $table->date('activity_start'); // วันที่เริ่มจัดกิจกรรม
            // $table->date('activity_end'); // วันที่สิ้นสุดจัดกิจกรรม
            $table->unsignedInteger('participant_number');
            $table->double('activity_fee'); // ค่าลงทะเบียน
            $table->string('activity_place');
            //$table->foreignIdFor(\App\Models\User::class);
            // $table->unsignedInteger('organizer_id'); // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
            $table->string('organizer_name'); //ผู้จัดกิจกรรม ที่ไม่ใช่จาก organizer_id
            $table->string('description');
            $table->string('contact'); // ช่องทางติดต่อ, ใส่เป็น string เพื่อเพิ่มความยืดหยุ่นในการใส่ข้อมูล
            $table->string('poster_path'); // ผู้โพสต์ (host)
            $table->boolean('is_posted')->default(false); // โพสต์แล้วหรือยัง (ป้องกันการโพสต์ซ้ำ)
            $table->double('budget')->default(1000.0); // งบประมาณของกิจกรรม
            // $table->unsignedInteger('working_team_number')->default(1);
            $table->boolean('verify')->default(false);
            $table->foreignIdFor(User::class)->comment('user creator');

            // $table->foreignIdFor(User::class)->comment();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
