<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function contactEmail(Request $request)
    {
        \Mail::to('jensenwd3@gmail.com')->send(new ContactEmail($request));
        //Add some flash alert
        return view('homepage')->with();
    }
}
