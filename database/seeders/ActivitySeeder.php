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
        $activity->activity_name = 'กิจกรรมทดสอบ';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ทดสอบ';
        $activity->activity_hours = 3;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ทดสอบ';
        $activity->description = 'ทดสอบ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();

        $activity = new Activity();
        $activity->activity_name = 'กิจกรรมทดสอบ2';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ทดสอบ';
        $activity->activity_hours = 3;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ทดสอบ';
        $activity->description = 'ทดสอบ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = true;
        $activity->save();

        $activity = new Activity();
        $activity->activity_name = 'กิจกรรมทดสอบ3';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'ทดสอบ';
        $activity->activity_hours = 3;
        $activity->activity_date = '30-03-2024';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ทดสอบ';
        $activity->description = 'ทดสอบ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ';

        
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = true;
        $activity->save();
    }
}
