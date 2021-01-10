<?php

namespace App\Mail;

use App\Artical;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;
    public  $topic;

    public function __construct($topic)
    {
        $this->$topic =$topic;
    }

    public function build()
    {
        return $this->markdown('ContactMeView');
    }
}
