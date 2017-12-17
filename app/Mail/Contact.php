<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

	public $name;
	public $email;
	public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request = null )
    {
	    if(is_null($request)){
		    return;
	    }
	    $this->email   = $request->email;
	    $this->name    = $request->name;
	    $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact');
    }
}
