<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewUserContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $contact ;
    public function __construct(ContactMessage $contact)
    {
        $this->contact = $contact ;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Message de Confirmation - ') .$this->contact->sujet,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.messages.news',
            with: [
                "logo"=>"logo",
                "show"=>true,
                "url"=>env('SITE_URL'),
                'nom' => $this->contact->nom,
                'message'=>"Bonjour M/Mme ".$this->contact->nom ."! <br>Nous avons bien reçu votre message.<br><br>Un Membre de notre équipe vous contactera.",
            ]
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
