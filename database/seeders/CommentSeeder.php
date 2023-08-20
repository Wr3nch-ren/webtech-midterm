<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment = new Comment();
        
        $comment->comment_content = 'This is a test comment.';
        $comment->user_id = 2;
        $comment->post_id = 1;

        $comment->save();
    }
}
