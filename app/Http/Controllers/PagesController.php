<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function blogsCreate()
    {
        $blogs = \App\Models\Blog::all();
        return view('blogs', compact('blogs'));
        // dd($blogs);
    }
    public function index()
    {
        if (Auth::user()->name == "superadmin") {
            return view('createBlog');
        } else {
            abort('403', 'For this page only for Admin');
        }
    }
    public function store()
    {
        $blogsStore = new \App\Models\Blog;
        $blogsStore->name = request('name');
        $blogsStore->description = request('description');
        $blogsStore->save();
        return redirect('blogs');
    }
    public function show(\App\Models\Blog $blog)
    {
        // dd($id);
        return view('show', compact('blog'));
    }
    public function edit(\App\Models\Blog $blog)
    {
        // dd($id);
        return view('edit', compact('blog'));
    }

    public function update(\App\Models\Blog $blog)
    {
        $blog->update(request(["name", "description"]));
        return redirect('blogs');
    }

    public function delete(\App\Models\Blog $blog)
    {
        // dd($id);
        $blog->delete();
        return redirect('blogs');
    }
}
