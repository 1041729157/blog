<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactStroyRequest;
use Auth;

class ContactsController extends Controller
{


    public function index(Contact $contact)
    {
    	return view('contacts.index', compact('contact')); 
    }

    // 未登陆用户留言
    public function create(ContactRequest $request, Contact $contact)
    {
    	$contact->content = $request->content;

    	/*if (Auth::check()){
	    	$contact->user_id = Auth::id();
	    	$contact->name = Auth::user()->name;
    		$contact->email = Auth::user()->email;
	    } else {
	    	$contact->fill($request->all());
	    }*/
	    $contact->fill($request->all());

    	$contact->save();

    	return redirect()->back()->with('success', '感谢您的建议，请耐心等待站长回复');
    }

    // 登陆用户留言
    public function stroy(ContactStroyRequest $request, Contact $contact)
    {
    	$contact->content = $request->content;
    	$contact->user_id = Auth::id();
	    $contact->name = Auth::user()->name;
    	$contact->email = Auth::user()->email;
    	$contact->save();

    	return redirect()->back()->with('success', '感谢您的建议，请耐心等待站长回复');
    }
}
