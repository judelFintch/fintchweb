<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewQuoteRequestMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public QuoteRequest $quoteRequest)
    {
    }

    public function build(): self
    {
        return $this
            ->subject('Nouvelle demande de devis - '.$this->quoteRequest->name)
            ->replyTo($this->quoteRequest->email, $this->quoteRequest->name)
            ->view('emails.quotes.new-admin');
    }
}
