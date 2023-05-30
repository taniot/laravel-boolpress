<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destroy(Comment $comment){

        $post = $comment->post;
        $comment->delete();

        return redirect()->route('admin.posts.show', $post);
    }
}
