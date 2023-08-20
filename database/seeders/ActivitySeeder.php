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
        $activity = new Activity();         //id = 1
        $activity->activity_name = 'ค่ายอาสาเพื่อการทดสอบ1';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ค่ายอาสา';
        $activity->activity_hours = 3;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'เขาใหญ่';
        $activity->description = 'ทำประโยชน์กันเถอะ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();



        $activity = new Activity();      //id = 2
        $activity->activity_name = 'กิจกรรมทดสอบ2';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ทดสอบ2';
        $activity->activity_hours = 3;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ทดสอบ2';
        $activity->description = 'ทดสอบ2';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ2';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();

        $activity = new Activity();      //id = 3
        $activity->activity_name = 'กิจกรรมทดสอบความกล้า_';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ทดสอบจิตใจ';
        $activity->activity_hours = 9;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 500;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ทดสอบ2';
        $activity->description = 'มาทดสอบจิตใจ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ3';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();
    }
}
