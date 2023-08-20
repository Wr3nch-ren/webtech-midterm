<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        
        $post->post_content = 'This is a test post.';
        $post->user_id = 2;
        $post->team_id = 1;

        $post->save();
    }
}
