<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = new Task();
        $task->title_tasks = 'ไปติดต่อสปอนเซ้อ';
        $task->detail_tasks = 'ติดต่อสปอนเซ้อ สัก 10 ที่';    
        $task->is_finish = false;
        $task->tasklist_id = 1;
        $task->assign_user_id = 2;    
        $task->save();
    }
}
