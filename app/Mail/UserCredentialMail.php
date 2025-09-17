<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserCredentialMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $reviewClassification;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $classification)
    {
        $this->user = $user;
        $this->reviewClassification = $classification; // ERB, IACUC, or BOTH
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'MCU-RRS ACCOUNT CREDENTIALS',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.credentials', // Blade view
            with: [
                'fname' => $this->user->pi_fname,
                'id' => $this->user->pi_ID,
                'classification' => $this->reviewClassification,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
