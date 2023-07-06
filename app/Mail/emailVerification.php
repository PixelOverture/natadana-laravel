<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailVerification extends Mailable
{
    use Queueable, SerializesModels;
    public $emailVerif;

    /**
     * Create a new message instance.
     */
    public function __construct($emailVerif)
    {
        $this->emailVerif = $emailVerif;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('Verifikasi Email ' . $this->emailVerif['email'])
            ->markdown('email.emailVerification', [
                'emailverification' => $this->emailVerif,
                'name' => $this->emailVerif['name'],
            ]);
    }
}
