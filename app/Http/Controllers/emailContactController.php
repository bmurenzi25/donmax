<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\contactMail;
class emailContactController extends Controller
{

    public function sendMail(Request $request)
    {
        $data = $request->validate([
                'email'   => 'required|email:rfc',
                'contact_message' => 'required|min:5|max:2000',
            ]);

        Mail::to('max@donmaxcreative.com')->send(new contactMail($data));
    }
}
