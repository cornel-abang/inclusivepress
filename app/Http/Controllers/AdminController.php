<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminController extends Controller
{
    public function loginFrm()
    {
        $title = 'Admin Login';
        return view('admin.login', compact('title'));
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        session()->flash('error','Invalid credentials');
        return back()->withInput($request->only('email'));
    }

    public function index()
    {
        $title = 'Admin dashboard';
        $data = Article::where('category', 'Data story')->count();
        $science = Article::where('category', 'Science story')->count();
        $news = Article::where('category', 'News')->count();
        $all_articles = Article::count();
        
        return view('admin.index', compact('title', 'data', 'science', 'news', 'all_articles'));
    }

    public function logout()
    {
        \Auth::logout();
        session()->flash('error', 'Logged out!');
        return redirect()->route('/');
    }
}
