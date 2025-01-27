<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Contact;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    /** 
    *Write code on Method
    *
    *@return response()
    */
    public function index(){
        $contacts = Contact::all();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.contactus', [
            'contacts' => $contacts,
            'social_medias' => $social_medias,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);
        $subject = 'Contact - ' . $request['name'];
        $request->mergeIfMissing(['subject' => $subject]);
  
        Mail::create($request->all());
  
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
