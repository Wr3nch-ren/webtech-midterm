<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Budget;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Tasklist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        // $this->call(ActivitySeeder::class);

        // $this->call(BudgetSeeder::class);
        // $this->call(ItemSeeder::class);

        // $this->call(TeamSeeder::class);
        // $this->call(RegistrySeeder::class);

        // $this->call(AnnouncementSeeder::class);
        // $this->call(PostSeeder::class);
        // $this->call(CommentSeeder::class);


        // $this->call(TeamMemberSeeder::class);

        // $this->call(TasklistSeeder::class);
        // $this->call(TaskSeeder::class);


    }
}
