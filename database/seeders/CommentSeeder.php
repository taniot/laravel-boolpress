<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++) {

            $post = Post::inRandomOrder()->first(); //1 record della tabella posts -> 1 istanza

            $comment = new Comment();
            $comment->author = fake()->name;
            $comment->content = fake()->text();
            $comment->post_id = $post->id;
            $comment->save();

        }
    }
}
