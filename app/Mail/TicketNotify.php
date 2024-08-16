<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TicketNotify extends Mailable
{
    use Queueable, SerializesModels;
    private $data = [];

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('radioactive2024@example.com', 'UMN RadioActive 2024')
        ->subject($this->data['subject'])->view('mail.ticket-notify')->with('data', $this->data);
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {S
    //     return new Envelope(
    //         subject: 'Ticket Notify',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         markdown: 'mail.ticket-notify',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
