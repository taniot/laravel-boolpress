<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewComment;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
   public function store(Request $request){

    $data = $request->validate([
        'author' => 'nullable|string',
        'content' => 'string',
        'post_id' => 'integer|exists:posts,id'
    ]);

    $comment = new Comment();
    $comment->author = $data['author'];
    $comment->content = $data['content'];
    $comment->post_id = $data['post_id'];
    $comment->save();

    Mail::to('info@boolpress.it')->send(new NewComment($comment));

    return $comment;
   }
}
