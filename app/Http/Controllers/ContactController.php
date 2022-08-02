<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        /* $validation = $req->validate([
             'subject' => 'required|min:5|max:100',
             'name' => 'required|min:3|max:20',
             'message' => 'required|min:15|max:500'
         ]);*/
    }
}
