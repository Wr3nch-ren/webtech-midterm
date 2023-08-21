<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_member = new TeamMember();
        $team_member->team_id = 1;
        $team_member->user_id = 2;
        $team_member->role_in_team = 'รองฝ่ายอาหาร';     
        $team_member->save();

        $team_member = new TeamMember();
        $team_member->team_id = 1;
        $team_member->user_id = 4;
        $team_member->role_in_team = 'รองฝ่ายสอนเด็ก';     
        $team_member->save();

        $team_member = new TeamMember();
        $team_member->team_id = 1;
        $team_member->user_id = 5;
        $team_member->role_in_team = 'สมาชิกทั่วไป';     
        $team_member->save();
    }
}
