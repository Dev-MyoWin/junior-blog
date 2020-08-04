<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Image;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status=Subscribe::all();
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            "title" => 'required|unique:posts',
            "content" => "required",
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:30000',
            "category_id" => "required",
            "image_url" => 'required',
        ],
            [
                
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'content.required' => 'Enter content',
                'image_url.required'=>'Enter image ',
                'category_id.required' => 'Select categories',
                'image_url.required' => 'Select image',
            ]
        );
   
            $file = $request->file('image_url');
            
            $file_name = uniqid().'_'.$file->getClientOriginalName();

            $file->move(public_path().'/galleries',$file_name);



        $post = new  Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->sub_title = $request->sub_title;
        $post->content = $request->content;
        $post->code=$request->code;
        $post->image_url=$file_name;
        $post->is_published = $request->is_published;
        $post->save();

        $post->categories()->sync($request->category_id, false);

        Session::flash('message', 'Post created successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            
            'title' => 'required|unique:posts,title,' . $post->id . ',id', // ignore this id
            "content" => "required",
            "category_id" => "required",
            
        ],
            [
                
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'content.required' => 'Enter content',
                'category_id.required' => 'Select categories',
                
            ]
        );

        $file = $request->file('image_url');

        if($file == NULL)
        {
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->sub_title = $request->sub_title;
        $post->content = $request->content;
        $post->code=$request->code;
        $post->is_published = $request->is_published;
        $post->save();

        $post->categories()->sync($request->category_id);
        }
        else {
            $file_name = uniqid().'_'.$file->getClientOriginalName();

            $postImage = Image::make($file)->resize(1600,1066)->stream();

            $file->move(public_path().'/galleries',$file_name,$postImage);

            $post->user_id = Auth::id();
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->sub_title = $request->sub_title;
            $post->content = $request->content;
            $post->code=$request->code;
            $post->image_url=$file_name;
            $post->is_published = $request->is_published;
            $post->save();
    
            $post->categories()->sync($request->category_id);
        }


        

        Session::flash('message', 'Post updated successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        Session::flash('delete-message', 'Post deleted successfully');
        return redirect()->route('posts.index');
    }
}
