<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcement = new Announcement();
        $announcement->team_id = 1;
        $announcement->organizer_id = 2;
        $announcement->announcement_content = 'This is a test announcement.';
        $announcement->save();

        $announcement = new Announcement();
        $announcement->team_id = 1;
        $announcement->organizer_id = 2;
        $announcement->announcement_content = 'พรุ่งนี้รวมตัว9โมง สำคัญมากๆ';
        $announcement->save();

        $announcement = new Announcement();
        $announcement->team_id = 1;
        $announcement->organizer_id = 2;
        $announcement->announcement_content = 'อาทิตย์หน้า ถึงกำหนดค่าย';
        $announcement->save();
    }
}
