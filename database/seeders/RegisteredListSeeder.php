<?php

namespace Database\Seeders;

use App\Models\RegisteredList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisteredListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registered_list = new RegisteredList();
        $registered_list->user_id = '1';
        $registered_list->save();

        $registered_list = RegisteredList::find(1);
        $registered_list->activities()->attach(3);
        $registered_list->activities()->attach(1);

    }
}
