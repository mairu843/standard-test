<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            "last_name" => "required|string",
            "first_name" => "required|string",
            "email" => "required|email",
            "postcode" => "required",
            "address" => "required",
            "opinion" => "required|max:120"
        ]);
        $inputs = $request->all();
        $contact = new Contact();
        unset($inputs['_token_']);
        $contact->fill($inputs)->save();
        return view('confirm', ['inputs' => $inputs]);
    }

    public function thanks(Request $request)
    {
        return view('thanks');
    }
}
