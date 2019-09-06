<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionServer extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->data = $request->all();
        $this->data['message'] = str_replace("\r","\n",$this->data['message']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contactserver')
            ->from($this->data['email'])
            ->to(config('mail.from.address'), config('mail.from.name'))
            ->with('data', $this->data)
            ->subject("Query Confirmation - ".config('data.meta.sitename'));
    }
}
