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
        $announcement->activity_id = 1;
        $announcement->user_id = 2;
        $announcement->announcement_content = 'This is a test announcement.';
        $announcement->save();
    }
}
