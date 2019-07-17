<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContactController extends Controller
{
    public function message()
    {
    	$data['messages'] = Contact::all();
    	return view ('admin.message.message_list',$data);
    }

    public function viewMessage($id)
    {
    	$data['message'] = Contact::find($id);
    	return view('admin.message.details_message',$data);
    }

    public function deleteMessage($id)
    {
    	$delete = Contact::find($id);
    	$delete->delete();
    	 Session::flash('success', 'delete  Successfully');
    return redirect()->back();

    }
}
