<?php

namespace Database\Seeders;

use App\Models\Registry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registry = new Registry();
        $registry->team_id = 1;
        $registry->user_id = 5;
        $registry->status = "REGISTERED";
        $registry->save();

        $registry = new Registry();
        $registry->team_id = 1;
        $registry->user_id = 6;
        $registry->status = "CONFIRM";
        $registry->save();

        $registry = new Registry();
        $registry->team_id = 1;
        $registry->user_id = 7;
        $registry->status = "DECLINE";
        $registry->save();
    }
}
