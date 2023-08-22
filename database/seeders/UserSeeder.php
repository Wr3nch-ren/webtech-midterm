<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Enum\RoleAccessibility;
use App\Models\OrganizerList;
use App\Models\RegisteredList;
use App\Models\Registry;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            // $user = new User();
            // $user->name_title = 'นาย';
            // $user->name = 'สมชาย';
            // $user->surname = 'ใจดี';
            // $user->email = 'user01@test.com';
            // $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            // $user->date_of_birth = '1999-01-01';
            // $user->student_code = 'B6012345';
            // $user->nickname = 'สมชาย';
            // $user->faculty = 'วิทยาศาสตร์';
            // $user->major = 'วิทยาการคอมพิวเตอร์';
            // $user->year = 4;
            // $user->phone = '0123456789';
            // $user->line_id = 'user01';
            // $user->facebook = 'user01';
            // $user->congenital_disease = '-';
            // $user->allergy = '-';
            // $user->role = 'NORMAL';
            // $user->save();


                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'สมชาย';
                $user->surname = 'ใจดี';
                $user->email = 'user01@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0123456789';
                $user->line_id = 'user01';
                $user->facebook = 'user01';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW4lMjBmYWNlfGVufDB8fDB8fHww&w=1000&q=80';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();

                $user = new User();
                $user->name_title = 'นาง';
                $user->name = 'สมหมาย';
                $user->surname = 'ใจดีมาก';
                $user->email = 'user02@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '2004-01-01';
                $user->student_code = 'B60123456780';
                $user->nickname = 'แบ้ง';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0951236789';
                $user->line_id = 'user02';
                $user->facebook = 'user02';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1590702841774-45166f031529?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGh1bWFuJTIwZmFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();



                $user = new User();     //3
                $user->name_title = 'นางสาว';
                $user->name = 'สมหญิง';
                $user->surname = 'คงดี';
                $user->email = 'user03@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1995-01-01';
                $user->student_code = 'B6312345345';
                $user->nickname = 'สมหญิง';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'เคมี';
                $user->year = 2;
                $user->phone = '0123456789';
                $user->line_id = 'user03';
                $user->facebook = 'user03';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1555524554-0fdb51cd5020?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGh1bWFuJTIwZmFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();




                $user = new User();
                $user->name_title = 'นาง';
                $user->name = 'สุชาดา';
                $user->surname = 'คุ้มดี';
                $user->email = 'user04@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1985-01-01';
                $user->student_code = 'B6066677709';
                $user->nickname = 'สวย';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0823675555';
                $user->line_id = 'user04';
                $user->facebook = 'user04';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1621012649112-d1724740b0da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();



                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'ชาติชาย';
                $user->surname = 'ชายหาด';
                $user->email = 'user05@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                $user->student_code = 'B6012345345';
                $user->nickname = 'ชาติชาย';
                $user->faculty = 'มนุษศาสตร์';
                $user->major = 'ภาษาอังกฤษ';
                $user->year = 3;
                $user->phone = '0123456789';
                $user->line_id = 'user05';
                $user->facebook = 'user05';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGh1bWFuJTIwZmFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();



                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'สมชาย';
                $user->surname = 'ใจดี';
                $user->email = 'user06@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0123456789';
                $user->line_id = 'user06';
                $user->facebook = 'user06';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1589234217365-08d3e0e5cf42?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();



                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'สมชาย';
                $user->surname = 'ใจดี';
                $user->email = 'user07@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                // $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                // $user->faculty = 'วิทยาศาสตร์';
                // $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0123456789';
                $user->line_id = 'user07';
                $user->facebook = 'user07';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1548544149-4835e62ee5b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aHVtYW4lMjBmYWNlfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::ADMIN;
                $user->save();


                $user = new User();
                $user->name_title = 'นาง';
                $user->name = 'รสริน';
                $user->surname = 'ใจดี';
                $user->email = 'user08@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                // $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                // $user->faculty = 'วิทยาศาสตร์';
                // $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 3;
                $user->phone = '0123456789';
                $user->line_id = 'user08';
                $user->facebook = 'user08';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80';
                $user->role = RoleAccessibility::STAFF;
                $user->save();


                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'จิตดี';
                $user->surname = 'ใจดี';
                $user->email = 'user09@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 4;
                $user->phone = '0123456789';
                $user->line_id = 'user09';
                $user->facebook = 'user09';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://plus.unsplash.com/premium_photo-1666866587910-2f333c109ef7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGh1bWFuJTIwZmFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();

                $user = new User();
                $user->name_title = 'นาย';
                $user->name = 'จิตใจดี';
                $user->surname = 'ใจดี';
                $user->email = 'user10@test.com';
                $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                $user->date_of_birth = '1999-01-01';
                $user->student_code = 'B6012345345';
                $user->nickname = 'สมชาย';
                $user->faculty = 'วิทยาศาสตร์';
                $user->major = 'วิทยาการคอมพิวเตอร์';
                $user->year = 2;
                $user->phone = '0123456789';
                $user->line_id = 'user10';
                $user->facebook = 'user10';
                $user->congenital_disease = '-';
                $user->allergy = '-';
                $user->image_path = 'https://images.unsplash.com/photo-1520451644838-906a72aa7c86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGh1bWFuJTIwZmFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60';
                $user->role = RoleAccessibility::NORMAL;
                $user->save();

                // $activity->users()->attach($user->id);
                // $activity->users()->attach($user->id, ['is_organizer' => true]);

                // // // $user()->activities()->attach($activity->id );

                // $activity = new Activity();         //id = 1
                // $activity->activity_name = 'ค่ายอาสาเพื่อการทดสอบ222222';
                // $activity->deadline = '30-02-2024';
                // $activity->activity_type = 'ค่ายอาสา';
                // $activity->activity_category = 'ค้างคืน';
                // $activity->organizer_id = 4;
                // $activity->organizer_name = "comsci";
                // $activity->activity_hours = 3;
                // $activity->activity_start = '2024-03-3';
                // $activity->activity_end = '2024-03-3';
                // $activity->participant_number = 30;
                // $activity->activity_fee = 100;
                // // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
                // $activity->activity_place = 'เขาใหญ่';
                // $activity->description = 'ทำประโยชน์กันเถอะ';
                // $activity->contact = '0812345678';
                // $activity->poster_path = 'ทดสอบ';
                // $activity->budget = 1000;
                // $activity->working_team_number = 3;
                // $activity->verify = false;
                // $activity->save();

                // $activity->users()->attach($user->id);

                // $team = new Team();
                // $team->organizer_id = 1;
                // $team->activity_id = 1;
                // $team->save();



                // $user = new User();
                // $user->name_title = 'นางสาว';
                // $user->name = 'สมาน';
                // $user->surname = 'ชาญสมร';
                // $user->email = 'user02@test.com';
                // $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                // $user->date_of_birth = '1999-01-01';
                // $user->student_code = 'B6012345';
                // $user->nickname = 'สมาน';
                // $user->faculty = 'วิทยาศาสตร์';
                // $user->major = 'วิทยาการคอมพิวเตอร์';
                // $user->year = 4;
                // $user->phone = '0234567891';
                // $user->line_id = 'user02';
                // $user->facebook = 'user02';
                // $user->congenital_disease = '-';
                // $user->allergy = '-';
                // $user->role = 'ORGANIZER';
                // $user->save();

                // $user = new User();
                // $user->name_title = 'นาง';
                // $user->name = 'เสมียน';
                // $user->surname = 'เชียรชัย';
                // $user->email = 'user03@test.com';
                // $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                // $user->date_of_birth = '1999-01-01';
                // $user->student_code = 'B6012345';
                // $user->nickname = 'สมาน';
                // $user->faculty = '-';
                // $user->major = '-';
                // $user->year = '-';
                // $user->phone = '0234567891';
                // $user->line_id = '-';
                // $user->facebook = '-';
                // $user->congenital_disease = '-';
                // $user->allergy = '-';
                // $user->role = 'STAFF';
                // $user->save();

                // $user = new User();
                // $user->name_title = 'นาย';
                // $user->name = 'สุดใจ';
                // $user->surname = 'สายหยุด';
                // $user->email = 'user04@test.com';
                // $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
                // $user->date_of_birth = '1999-01-01';
                // $user->student_code = 'B6012345';
                // $user->nickname = 'สุดใจ';
                // $user->faculty = 'วิทยาศาสตร์';
                // $user->major = 'วิทยาการคอมพิวเตอร์';
                // $user->year = 4;
                // $user->phone = '0123456789';
                // $user->line_id = 'user04';
                // $user->facebook = 'user04';
                // $user->congenital_disease = '-';
                // $user->allergy = '-';
                // $user->role = 'NORMAL';
                // $user->save();

                // User::factory(10)->create();

                // $registry = new Registry();
                // $registry->team_id = 1;
                // $registry->user_id = 5;
                // $registry->status = "REGISTERED";
                // $registry->save();

                // $registry = new Registry();
                // $registry->team_id = 1;
                // $registry->user_id = 6;
                // $registry->status = "CONFIRM";
                // $registry->save();

                // $registry = new Registry();
                // $registry->team_id = 1;
                // $registry->user_id = 7;
                // $registry->status = "DECLINE";
                // $registry->save();
        }
}
