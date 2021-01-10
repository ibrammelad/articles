<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class PaymentNotify extends Notification
{
    use Queueable;

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function via($notifiable)
    {
        return ['mail','database', 'nexmo'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The notification is sent .')
            ->action('Notification Action', url('127.0.0.1:8000/about'))
            ->line('Thank you for using our application!');
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())
            ->content(request('content'));
    }

    public function toArray($notifiable)
    {
        return [
            'amount' =>$this->amount,
        ];
    }
}
