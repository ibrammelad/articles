<?php

namespace App\Http\Controllers;

use App\Events\ProductEvent;
use App\Notifications\PaymentNotify;
use Illuminate\Http\Request;

class notificationController extends Controller
{
    public function create()
    {
        return view('notification.create');
    }
    public function store()
    {
//        \request()->user()->notify(new PaymentNotify(900));
//        return redirect('/notification')->with('message','message is sent');
        ProductEvent::dispatch('toy');
    }

    public function show()
    {
        $notifications = auth()->user()->unreadNotifications;
        $notifications->markAsRead();
        return view('notification.show',
        ['notifications'=> $notifications]
        );
    }



}
