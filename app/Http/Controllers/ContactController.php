<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMailer;
use App\Mail\OrderShipped;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    function sendFrom() {
        return view('contactus');
    }//->where(["name" => "[A-Za-z]+"]);

#facade //use Illuminate\Http\Request;
    public function sendTo(Request $request)   #request for the method POST
    {
        #dd(info);
        $data = $request->except('_token');
        // dd($data);
        Mail::to('test@example.com')->send(new ContactMailer($data));
                return "Msg sent successfuly";
    }
}

        /*::findOrFail($request->order_id);
        // $data = $request->all(); #$request;

        session(['formData' => $data]);// Store the data in the session instead of the database nor cookies as there is no pwd n it's more secured

        return redirect()->route('c-responses');

                // Ship the order...

                Mail::to($request->user())->send(new OrderShipped($order));
    ->cc($moreUsers)
    ->bcc($evenMoreUsers)
    ->send(new OrderShipped($order));


    // or
    $message = (new OrderShipped($order))
                ->onConnection('sqs')
                ->onQueue('emails');

Mail::to($request->user())
    ->cc($moreUsers)
    ->bcc($evenMoreUsers)
    ->queue($message);

                return redirect('/orders');
            }

    // Retrieve the stored data from the session
    public function responses() {
        $data = session('formData');
        return view('c-responses', compact('data'));
    }
}*/





// foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
//     Mail::to($recipient)->send(new OrderShipped($order));
// }

