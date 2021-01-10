<?php

namespace App\Http\Controllers;

use App\Artical;
use App\Mail\ContactMe;
use App\Notifications\Notificationcontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ArticalController extends Controller
{
    public function show()
    {

         return view('about',
        [
            'articals' => Artical::all()
        ]);

    }

    public function showContact()
    {
        return view('contact');
    }

    public function store(Artical $artical)
    {
//       $artical= \request()->validate([
//           'content' => ['required'],
//            'email' => ['required' , 'email']
//        ]);
      //  Mail::to(\request('email'))->send(new ContactMe(\request('content')));
        \request()->user()->notify(new Notificationcontact());
       // Notification::send(\request()->user() , new Notificationcontact());
        return redirect('/contact')->with('message','Email sent !!!!');

        //        Mail::raw('fuck mina', function($message){
//          $message->to(\request('email'));
//          });
    }
}
