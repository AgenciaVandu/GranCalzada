<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* return $request->all(); */
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'extract' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'file' => 'required|image',
        ]);
        $post = Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'extract' => $request->extract,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
        if ($request->file('file')) {
            $url = Storage::put('resources', $request->file('file'));
            $post->resources()->create([
                'url' => $url,
                'type' => 'image'
            ]);
        }

        return redirect()->route('posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        /* return $request->all(); */
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'extract' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);
        $post->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => Str::slug($request->title),
            'extract' => $request->extract,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);
        if ($request->file('file')) {
            $url = Storage::put('resources', $request->file('file'));
            $post->resources()->update([
                'url' => $url,
                'type' => 'image'
            ]);
        }

        return redirect()->route('posts.edit', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }



    public function uploadImages(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_EXTENSION);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('/images/ckeditor'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/images/ckeditor/' . $fileName);
            $msg = 'Imagen subida con exito';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg');</script>";
            @header('Content-Type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
