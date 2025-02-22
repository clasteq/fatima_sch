<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GeneralMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone_number;
    public $email;
    public $message_content;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $phone_number,  $email, $message_content)
    {
        $this -> name = $name;
        $this -> phone_number = $phone_number;
        $this -> email = $email;
        $this -> message_content = $message_content;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "General Enquiry",
            #from: new Address('priyavignesh1412@gmail.com', 'MEdia'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'general_mail',
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
