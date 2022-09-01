<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
//        dd(DB::select(DB::raw("select * from posts LEFT JOIN comments on comments.post_id = posts.id")));

        return view('test', [
//            'posts' => Post::all(),
//            'comments' => Comment::all(),
            'test' => DB::select(DB::raw("select * from posts LEFT JOIN comments on comments.post_id = posts.id"))
        ]);
    }
}
