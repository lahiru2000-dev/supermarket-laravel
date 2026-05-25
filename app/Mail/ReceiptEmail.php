<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReceiptEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $paymentStatus;
    public $cart;
    public $session;

    public function __construct($paymentStatus, $cart, $session)
    {
        $this->paymentStatus = $paymentStatus;
        $this->cart = $cart;
        $this->session = $session;
    }

    
    

    
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    public function build()
    {
        return $this->view('emails.receipt')
                    ->subject('Payment Receipt');
    }
}
