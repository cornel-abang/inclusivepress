<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PostController extends Controller
{
    public function singlePost($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $title = $article->title;
        $others = Article::where('id', '!=', $article->id)->get();
        return view('single-post', compact('title', 'article', 'others'));
    }

    public function postsBycategory($cat)
    {
        $category = str_replace('-', ' ', $cat);
        $title = $category;
        $articles = Article::where('category', $category)->paginate(5);
        return view('by-category', compact('title', 'articles', 'category'));
    }
}
