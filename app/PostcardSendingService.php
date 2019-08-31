<?php

namespace App;
use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{
    private $country;
    private $with;
    private $height;

    public function __construct($country, $with, $height){
        $this->country = $country;
        $this->with = $with;
        $this->height = $height;
    }

    public function hello($message, $email)
    {
        Mail::raw($message, function($message) use($email){
            $message->to($email);
        });

        // Mail out postcard though some service
        // $this->country
        // $this->with
        // $this->height

        dump('Postcard was sent with the message: '. $message);
    }
}