<?php

namespace App\Http\Controllers;

use App\Post;
use App\Subscribe;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{

    public function index()
    {
        //
    }

    public function confirm_code()
    {
        return view('mail/confirm_code');
    }

  
    public function store(Request $request)
    {
        
        $subscriber=Subscribe::where('email','=',$request->email)->first();
        if($subscriber === null) {
           $pin =mt_rand(000000,999999);
           $confirmation_code=str_shuffle($pin);

      Subscribe::create(['name'=>$request->name,'email'=>$request->email,'confirm_code'=>$confirmation_code]);

      $data = array('name'=>"Junior Blog",'username'=>$request->name,'email'=>$request->email,'confirm_code'=>$confirmation_code);
      Mail::send('mail.confirmation_send', $data, function($message) use($request) {
      $message->to($request->email,$request->name)->subject
      ('Subscribe Mail');
      $message->from('laravel.myowin.mm@gmail.com','Junior Blog');
      });
      Session::flash('message', 'Please check your email address to confirm your subscribe');
      return redirect()->route('index');
     }
    }

    public function confirmation(Request $request)
    {
        $confirmation = $request->digit1.$request->digit2.$request->digit3.$request->digit4.$request->digit5.$request->digit6;
  
        $subscriber = Subscribe::where('confirm_code', '=', $confirmation)->first();
        if ($subscriber === null) {
            return view('mail/confirmation_code');
           // user doesn't exist
        }
  
        else {
        $id= $subscriber->id;
         Subscribe::where('id', '=', $id)->update(['status'=>true,'confirm_code'=>"confirmed"]);
          $data = array('email'=>$subscriber->email,'name'=>$subscriber->name);
  
          Mail::send('mail.confirmation_success', $data, function($message) use ($subscriber) {
             $message->to($subscriber->email,$subscriber->name)->subject
                ('Subscription Success');
             $message->from('laravel.myowin.mm@gmail.com','Junior Blog');
          });
         Session::flash('message', 'Your Subscription have been successful please checkout your email!!');

          return redirect()->route('index');
        }
  
    }  
}
