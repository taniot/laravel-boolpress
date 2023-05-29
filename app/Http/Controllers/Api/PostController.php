<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        //$posts = Post::all();
        // $posts = Post::with('category', 'tags')->get();

        //paginazione
        $posts = Post::with('category', 'tags')->paginate(6);

        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
    //public function show(Post $post) -> non ha category e tags
    public function show(string $slug)
    {

        //$post = Post::where('slug', $slug)->with('category', 'tags')->first();
        // $post = Post::where('id', $id)->with('category', 'tags')->first();


        try {
            $post = Post::where('slug', $slug)->with('category', 'tags')->first();

            if ($post) {
                return response()->json([
                    'success' => true,
                    'results' => $post
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'results' => null
                ], 404);
            }
        } catch (\Throwable $th) {

            return response()->json([
                'success' => false,
                'results' => null
            ], 500);

        }
    }
}
