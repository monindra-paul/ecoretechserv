<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }

    public function postContact(Request $request){

        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        // $contact = new Contact;
        // $contact -> name = $request['name'];
        // $contact -> email = $request['email'];
        // $contact -> subject = $request['subject'];
        // $contact -> query = $request['query'];
        // $contact -> save();

        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $createData = Contact::insert($data);

        if($createData){
            return redirect()->back()->with('Success','Updated Successfully');
        }
        else{
            return redirect()->back()->with('Error','Something Went Wrong');
        }
    }

    public function show($id){

        $contacts = Contact::find($id);
        if ( is_null ($contacts) ){
            
            return redirect('index');
        }
        else{
          
            $data = compact('contacts');
            return view('backend.contact.show')->with($data);
        }
    }
}
