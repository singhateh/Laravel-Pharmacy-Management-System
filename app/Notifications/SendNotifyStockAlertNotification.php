<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendNotifyStockAlertNotification extends Notification
{
    use Queueable;

    private $data;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url(route('edit-purchase',$this->data->id));
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('The Product below is running out of stock.')
                    ->line("Medicine's name is ".$this->data->name ." is only ".$this->data->quantity." left in quantity")
                    ->line("Please update the medicine's quantity or make a new purchase.")
                    ->action('View Medicine', $url)
                    ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'product_name'=>$this->data->name,
            'quantity'=>$this->data->quantity,
            'image'=>$this->data->image,
        ];
    }

    
    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'product_name'=>$this->data->name,
            'quantity'=>$this->data->quantity,
        ]);
    }
}
