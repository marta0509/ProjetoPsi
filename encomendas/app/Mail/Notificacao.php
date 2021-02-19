<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notificacao extends Mailable
{
    use Queueable, SerializesModels;

    public $vendedores;

    public function __construct($vendedor)
    {
        $this->vendedores=$vendedor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('7354422b7d-88cf11@inbox.mailtrap.io')
        ->subject('Novo registo')
        ->view('emails.notificacao');
    }
}
