<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactMail;

class ContactsController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        //dd($data);
        
        Mail::to($data['mail'])->send(new SendContactMail($data));
    }
}
