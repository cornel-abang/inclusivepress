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

    public function singlePost2()
    {
        $title = 'How Otukpo became an oasis of peace in Benue after Fulani militia’s attack';
        return view('single-2', compact('title'));
    }
}
