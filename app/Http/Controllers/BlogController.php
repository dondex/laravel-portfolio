<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        if ($request->search) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')
                ->orwhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(5);
        } else {
            $posts = Post::latest()->paginate(5);
        }
        return view('blogPosts.blog', compact('posts'));
    }

    public function create()
    {
        return view('blogPosts.create-blog-post');
    }
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
        ]);

        $title = $request->input('title');


        $slug = Str::slug($title, '-');
        $user_id = Auth::user()->id;
        $body = $request->input('body');

        //File Upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('status', 'Post Created Successfully!');
    }

    public function edit(Post $post)
    {
        if (auth()->user()->id !== $post->user->id) {
            abort(403);
        }
        return view('blogPosts.edit-blog-post', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (auth()->user()->id !== $post->user->id) {
            abort(403);
        }
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $title = $request->input('title');

        if (Post::latest()->first() !== null) {
            $postId = Post::latest()->first()->id + 1;
        } else {
            $postId = 1;
        }

        $postId = $post->id;
        $slug = Str::slug($title, '-') . '-' . $postId;
        $body = $request->input('body');

        //File Upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');


        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('status', 'Post Edited Successfully!');
    }


    // public function show($slug)
    // {
    //     $post = Post::where('slug', $slug)->first();
    //     return view('blogPosts.single-blog-post', compact('post'));
    // }

    // Using Route model binding
    public function show(Post $post)
    {
        return view('blogPosts.single-blog-post', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('status', 'Post Delete Successfully!');
    }
}
