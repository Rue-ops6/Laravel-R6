<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\SentMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Contracts\Mail\Attachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Attachment;


class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(        
        public Order $order,
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
'from' => [ 
    'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
    'name' => env('MAIL_FROM_NAME', 'Example'),
],        #'from' => [ #'address' => 'example@example.com', 'name' => 'App Name'],
 #replyTo: [ new Address('taylor@example.com', 'Taylor Otwell'),],
            sub: 'Order Shipped',
            using: [
                function (Email $message) {
                    // ...
                }, ]
            msg: 'horay!',
                );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.orders.shipped',
            with: [
                'name' => $this->order->name,],
            html: 'mail.orders.shipped',
                    text: 'mail.orders.shipped-text',
                    // markdown: 'mail.orders.shipped',
                    // with: [
                    //     'url' => $this->orderUrl,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [     #return [$this->photo];
            Attachment::fromStorage('/asset/asstes/images')->as('name.pdf'),
    ];
    }



    /*class Photo extends Model implements Attachable  {
     * Get the attachable representation of the model.
     
    public function toMailAttachment(): Attachment
    {
        return Attachment::fromPath('/path/to/file');
    }*/



}
