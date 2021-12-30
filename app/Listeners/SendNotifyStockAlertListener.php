<?php

namespace App\Listeners;

use App\Events\MedicineOutStock;
use App\Models\User;
use App\Notifications\SendNotifyStockAlertNotication;
use App\Notifications\SendNotifyStockAlertNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotifyStockAlertListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MedicineOutStock $event)
    {
        $users = User::get();
        foreach($users as $user){
            $user->notify(new SendNotifyStockAlertNotification($event->data));
        }
    }
}
