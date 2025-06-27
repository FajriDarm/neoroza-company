<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @param array $contact
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   public function build()
    {
        return $this->from($this->contact['email'], $this->contact['name'])
                ->subject('Pesan Kontak Baru')
                ->text('emails.contact_plain') // Untuk versi plain text
                ->with(['contact' => $this->contact]);
    }
}