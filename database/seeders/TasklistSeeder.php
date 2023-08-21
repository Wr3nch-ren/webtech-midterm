<?php

namespace Database\Seeders;

use App\Models\Tasklist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasklist = new Tasklist();
        $tasklist->tasklist_name = 'หัวหน้าจ่ายงาน ค่ายอาสา ทดสอบ';
        $tasklist->team_id = 1;    
        $tasklist->save();
    }
}
