<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\Email;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
 

class EmailController extends Controller
{
    function contactus() {
        return view('contactus');
    }//->where(["name" => "[A-Za-z]+"]);

#facade //use Illuminate\Http\Request;
    public function data(Request $request): RedirectResponse
    {
        #dd(info);
        $order = Email::findOrFail($request->order_id);
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



}





// foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
//     Mail::to($recipient)->send(new OrderShipped($order));
// }