<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    //DEFINISCO LA VARIBILE D ISTANZA IN CUI VERRANNO MEMORIZZATI I DATI DELL'UTENTE
    public $lead;

    public function __construct()
    {
        $this->lead = $_lead;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    

    public function envelope()
    {
        return new Envelope(
            //indirizzo di risposta
            replyTo: $this->lead->address,
            //oggetto del messaggio
            subject: 'Nuovo contatto',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */


    public function content()
    {
        //contenuto dell'email da inviare
        return new Content(
            view: 'emails.new-contact-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
