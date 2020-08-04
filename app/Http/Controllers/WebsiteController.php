<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category; 
use App\Mail\VisitorContact;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function index()
    {
        $status=Subscribe::where('status','1')->first();
        $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('is_published', '1')->paginate(6);
        return view('website.index', compact('posts', 'categories','status'));
    }

    public function post($slug)
    {
        
        $post = Post::where('slug', $slug)->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('is_published', '1')->first();
        if ($category) {
            $posts = $category->posts()->orderBy('posts.id', 'DESC')->where('is_published', '1')->paginate(6);
            return view('website.category', compact('category', 'posts'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }


    public function showContactForm()
    {
        return view('website.contact');
    }

    public function submitContactForm(Request $request)
    {
        $this->validate($request, [
            
            "name" => 'required',
            "email" => "required",
            "message" => "required",
        ],
            
            [
                'name.required' => 'Enter your name',
                'email.required' => 'Enter your email address',
                'message.required' => 'Please fill your message',
                
               
            ]
            );
       
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('dev.myowin.mm@gmail.com')->send(new VisitorContact($data));

        Session::flash('message', 'Thank you for your message');
        return redirect()->route('index');
    }
    
}
