<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity = new Activity();
        $activity->activity_name = 'กิจกรรมอาสาพิทักษ์ชายฝั่งทะเล';
        $activity->deadline = '25-08-2023';
        $activity->activity_type = 'อาสา';
        $activity->activity_hours = 10;
        $activity->activity_date = '30-08-2023';
        $activity->participant_number = 50;
        $activity->activity_fee = 1300;
        $activity->organizer_id = 1;// เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ชลบุรี';
        $activity->description = '
            We Volunteer Spirit Thailand ร่วมกับทีมเครือข่ายพันธมิตร ขอเชิญชวนน้องๆ 
            เข้าร่วมกิจกรรม “อาสาพิทักษ์ชายฝั่งทะเล (ทำความสะอาดบ้านเต่าทะเล + ทำความสะอาดชายหาด) 
            ณ ศูนย์อนุรักษ์พันธุ์เต่าทะเล กองทัพเรือ อ.สัตหีบ จ.ชลบุรี
        ';
        $activity->contact = '0932636541';
        $activity->poster = 'https://images.unsplash.com/photo-1505118380757-91f5f5632de0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=626&q=80';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();

        $activity = new Activity();
        $activity->activity_name = 'กิจกรรมอาสาพิทักษ์ชายฝั่งทะเล';
        $activity->deadline = '25-08-2023';
        $activity->activity_type = 'อาสา';
        $activity->activity_hours = 10;
        $activity->activity_date = '30-08-2023';
        $activity->participant_number = 50;
        $activity->activity_fee = 1300;
        $activity->organizer_id = 1; // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ชลบุรี';
        $activity->description = '
            We Volunteer Spirit Thailand ร่วมกับทีมเครือข่ายพันธมิตร ขอเชิญชวนน้องๆ 
            เข้าร่วมกิจกรรม “อาสาพิทักษ์ชายฝั่งทะเล (ทำความสะอาดบ้านเต่าทะเล + ทำความสะอาดชายหาด) 
            ณ ศูนย์อนุรักษ์พันธุ์เต่าทะเล กองทัพเรือ อ.สัตหีบ จ.ชลบุรี
        ';
        $activity->contact = '0932636541';
        $activity->poster = 'https://images.unsplash.com/photo-1505118380757-91f5f5632de0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=626&q=80';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();
    }
}
