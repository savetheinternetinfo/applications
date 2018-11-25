<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeniedApp extends Mailable
{
    use Queueable, SerializesModels;

    private $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DeniedApp $info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.deniedApp');
    }
}
