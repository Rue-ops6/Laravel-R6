<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use App\Http\Controllers\ContactController;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMailer extends Mailable
{
    use Queueable, SerializesModels;

    #public $data; in  __construct
    /**
     * Create a new message instance.
     */
    public function __construct(public $data) #to recive data
    {
    } #$this->data = $data; #encapsulation n5fi el data

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
subject: $this->data['subject'],
from: new Address($this->data['email'], $this->data['name']),
        );
    }

    /*
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
    }*/

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mailer.ContactMailer',
        );
        /*we did it as public, thus it's not necesary            with: [
                'data' => $this->data,
            ]*/
    }

          /*  view: 'mail.orders.shipped',
            with: [
                'name' => $this->order->name],
            html: 'mail.orders.shipped',
            text: 'mail.orders.shipped-text',
            // markdown: 'mail.orders.shipped',
            // with: [
            //     'url' => $this->orderUrl,
        );
    }  */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array    #for the files
    {
        return [#return [$this->photo];
            // Attachment::fromStorage('/asset/asstes/images')->as('name.pdf'),
        ];
    }

    /*class Photo extends Model implements Attachable  {
 * Get the attachable representation of the model.

public function toMailAttachment(): Attachment
{
return Attachment::fromPath('/path/to/file');
}*/

}
