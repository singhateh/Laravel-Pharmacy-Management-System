<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();
        $notification = array(
            'message'=>"Notifications marked as read",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }

    public function read(){
        auth()->user()->unreadNotifications->markAsRead();
        $notification = array(
            'message'=>"Notification marked as read",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }


    public function destroy($id)
    {
        auth()->user()->notifications()->delete();
        $notification = array(
            'message'=>"Notification has been deleted",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
