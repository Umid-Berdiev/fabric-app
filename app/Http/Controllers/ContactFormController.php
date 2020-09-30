<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
  public function store()
  {
    $data = [
      'name' => request()->userName,
      'email' => request()->userEmail,
      'message' => request()->userMsg,
    ];

    Mail::raw(request('userMsg'), function ($message) {
        $message->from(request('userEmail'), request('userName'));
        $message->to('info@textile-export.uz', 'Zokir Rustamov');
        $message->subject('Message from site visiter');
        
    });
    return response()->json("OK");
  }    
}
