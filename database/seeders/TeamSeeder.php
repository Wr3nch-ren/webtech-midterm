<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = new Team();
        $team->name_activity_team = 'ค่ายอาสา ทีม ทดสอบ';
        $team->organizer_id = 3;        // user id ที่ 3 เป็น หัวหน้าใหญ่ Team นี้
        $team->activity_id = 1;
        $team->save();

        $team = new Team();
        $team->name_activity_team = 'ค่ายอาสา ทีม ทดสอบ2';
        $team->organizer_id = 3;        // user id ที่ 3 เป็น หัวหน้าใหญ่ Team นี้
        $team->activity_id = 2;
        $team->save();
    }
}
