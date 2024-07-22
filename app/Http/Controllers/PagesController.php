<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    // public function blogsCreate()
    // {
    //     $blogs = \App\Models\Blog::all();
    //     return view('blogs', compact('blogs'));
    //     // dd($blogs);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createBlog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = \App\Models\Blog::all();
        return view('blogs', compact('blogs'));
        // dd($blogs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $blogsStore = new \App\Models\Blog;
        $blogsStore->name = request('name');
        $blogsStore->description = request('description');
        $blogsStore->save();
        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Blog $blog)
    {
        // dd($id);
        return view('show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\Blog $blog)
    {
        // dd($id);
        return view('edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Models\Blog $blog)
    {
        $blog->update(request(["name", "description"]));
        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Blog $blog)
    {
        // dd($id);
        $blog->delete();
        return redirect('blogs');
    }
}
