<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function singlePost()
    {
        $title = 'How to replicate Akabe’s model for peace with Fulani herdsmen';
        return view('single', compact('title'));
    }
}
