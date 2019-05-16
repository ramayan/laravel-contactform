<?php

namespace Ramayan\Laracontactform\Http\Controllers;

use Ramayan\Laracontactform\Models\ContactForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactFormController extends Controller {

    public function index()
    {
       return view('Laracontactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent succesfully.']);
    }


}