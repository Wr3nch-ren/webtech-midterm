<?php

namespace Database\Seeders;

use App\Models\OrganizerList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizedListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizer_list = new OrganizerList();
        $organizer_list->user_id = '1';
        $organizer_list->save();

        $organizer_list = OrganizerList::find(1);
        $organizer_list->activities()->attach(7);
        $organizer_list->activities()->attach(1);
        $organizer_list->activities()->attach(6);
    }
}
