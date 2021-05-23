<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmBook extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $nameUser = auth()->user()->name;
        $data = [
            'name'       => $nameUser,
            'nameDoctor' => $request->nameDoctor,
            'dateBook'   => $request->dateBook,
            'timeBook'   => $request->timeBook,
        ];
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sendMail');
    }
}
