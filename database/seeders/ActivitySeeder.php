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
        $activity->activity_place = 'ทดสอบ';
        $activity->description = 'ทดสอบ';
        $activity->contact = '0812345678';
        $activity->poster = 'ทดสอบ';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();
    }
}
