<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestReceivedMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public QuoteRequest $quoteRequest)
    {
    }

    public function build(): self
    {
        return $this
            ->subject('Votre demande de devis a ete recue')
            ->view('emails.quotes.received-client');
    }
}
