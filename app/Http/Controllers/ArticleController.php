<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All articles";
        $articles = Article::all();
        return view('admin.post.index', compact('title', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create news article";
        return view('admin.post.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $file=$request->file('header_img');
        $img_name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $request->header_img->move(public_path('assets/uploads'), $img_name);

        $slug = $this->createSlug($request->title);
        Article::create(array_merge($request->all(), ['header_img'=>$img_name, 'slug'=>$slug]));

        session()->flash('success', 'News article added');
        return redirect()->route('articles');
    }

    public function validator(Request $request)
    {
        $rules = [
            'title'        => 'required|string',
            'description'  => 'required',
            'category'     => 'required',
            'header_img'   => 'required',
            'author'       => 'required',
            'body'         => 'required'
        ];

        return $this->validate($request, $rules);
    }

    public function createSlug($title)
    {
        return str_replace(' ', '-', str_replace('?', '', $title));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $title = "Edit article: ".$article->title;
        return view('admin.post.edit', compact('title','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateUpdate($request);
        $article = Article::find($id);
        $img_name = $article->header_img;
        if ($request->hasFile('header_img')) {
            $file=$request->file('header_img');
            $img_name=$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $request->header_img->move(public_path('assets/uploads'), $img_name);
        }

        $article->update(array_merge($request->all(), ['header_img'=>$img_name]));
        session()->flash('success', 'News article updated');
        return redirect()->route('articles');
    }

    public function validateUpdate(Request $request)
    {
        $rules = [
            'title'        => 'string',
            'description'  => 'string',
            'category'     => 'string',
            'author'       => 'string',
            'body'         => 'string'
        ];

        return $this->validate($request, $rules);
    }

    public function articleByCat($slug)
    {
        $category = str_replace('_', ' ', $slug);
        $articles = Article::where('category', $category)->get();
        $title = $category;
        return view('admin.post.index', compact('title', 'articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        session()->flash('success', 'Article successfully deleted');
        return redirect()->route('articles');
    }
}
