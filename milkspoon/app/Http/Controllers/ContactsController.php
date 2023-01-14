<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.toiawase');
    }

    public function confirm(Request $request)
    {  $request->validate([
        'name'     => 'required|max:10',
        'email'    => 'required|email',
        'tel'      => 'nullable|numeric',
        'contents' => 'required',
    ]);
    
        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contact.confirm' ,['inputs' => $inputs]);

        
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $inputs  = $request->except('action');

        if($action === 'submit') {

           

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($inputs);
            $contact->save();

            // メール送信
            Mail::to($inputs['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $inputs));
        
            return redirect()->route('complete');
            } 

            else {
                return redirect()->route('contact')->withInput($inputs);
            }   
    }

    public function complete()
    {
        return view('contact.complete');
    }
}

