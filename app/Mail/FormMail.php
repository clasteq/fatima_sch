<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone_number;
    public $klass;

    /**
     * Create a new message instance.
     */
    public function __construct($name,  $email, $phone_number, $klass)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> phone_number = $phone_number;
        $this -> klass = $klass;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Admission Enquiry",
            #from: new Address('priyavignesh1412@gmail.com', 'MEdia'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admission_mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
