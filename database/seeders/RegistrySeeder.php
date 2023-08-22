<?php

namespace Database\Seeders;

use App\Models\Registry;
use App\Models\User;
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
        $registry->activity_id = 5;
        $registry->status = "REGISTERED";
        $registry->save();

        $user = User::find(1);
        $registry->users()->attach($user);
        $user = User::find(2);
        $registry->users()->attach($user);
        // $user = User::find(3);
        // $registry->attach($user);


        $registry = new Registry();
        $registry->activity_id = 5;
        $registry->status = "CONFIRM";
        $registry->save();

        $user = User::find(1);
        $registry->users()->attach($user);
        $user = User::find(2);
        $registry->users()->attach($user);
        $user = User::find(3);
        $registry->users()->attach($user);



        $registry = new Registry();

        $registry->activity_id = 5;
        $registry->status = "DECLINE";
        $registry->save();

        $user = User::find(9);
        $registry->users()->attach($user);
        $user = User::find(10);
        $registry->users()->attach($user);

    }
}
