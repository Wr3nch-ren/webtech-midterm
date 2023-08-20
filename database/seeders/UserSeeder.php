<?php

namespace Database\Seeders;

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
        $user = new User();
        $user->name_title = 'นาย';
        $user->name = 'สมชาย';
        $user->surname = 'ใจดี';
        $user->email = 'user01@test.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->date_of_birth = '1999-01-01';
        $user->student_code = 'B6012345';
        $user->faculty = 'วิทยาศาสตร์';
        $user->department = 'วิทยาการคอมพิวเตอร์';
        $user->nickname = 'สมชาย';
        $user->faculty = 'วิทยาศาสตร์';
        $user->department = 'วิทยาการคอมพิวเตอร์';
        $user->year = 4;
        $user->phone = '0123456789';
        $user->line_id = 'user01';
        $user->facebook = 'user01';
        $user->congenital_disease = 'ไม่มี';
        $user->allergy = 'ไม่มี';
        // $user->role = 'NORMAL';
        $user->save();

        $user = new User();
        $user->name_title = 'นางสาว';
        $user->name = 'สมาน';
        $user->surname = 'ชาญสมร';
        $user->email = 'user02@test.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->date_of_birth = '1999-01-01';
        $user->student_code = 'B6012345';
        $user->faculty = 'วิทยาศาสตร์';
        $user->department = 'วิทยาการคอมพิวเตอร์';
        $user->nickname = 'สมาน';
        $user->faculty = 'วิทยาศาสตร์';
        $user->department = 'วิทยาการคอมพิวเตอร์';
        $user->year = 4;
        $user->phone = '0234567891';
        $user->line_id = 'user02';
        $user->facebook = 'user02';
        $user->congenital_disease = 'ไม่มี';
        $user->allergy = 'ไม่มี';
        // $user->role = 'ORGANIZER';
        $user->save();

        $user = new User();
        $user->name_title = 'นาง';
        $user->name = 'เสมียน';
        $user->surname = 'เชียรชัย';
        $user->email = 'user03@test.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->date_of_birth = '1999-01-01';
        $user->student_code = 'B6012345';
        $user->faculty = 'วิทยาศาสตร์';
        $user->department = 'วิทยาการคอมพิวเตอร์';
        $user->nickname = 'สมาน';
        $user->faculty = null;
        $user->department = null;
        $user->year = null;
        $user->phone = '0234567891';
        $user->line_id = null;
        $user->facebook = null;
        $user->congenital_disease = 'ไม่มี';
        $user->allergy = 'ไม่มี';
        // $user->role = 'STAFF';
        $user->save();

        User::factory(10)->create();
    }



}
