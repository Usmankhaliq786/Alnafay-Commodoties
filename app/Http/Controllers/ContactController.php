<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('theme.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];

        $contact->save();

        return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully!');
    }

    public function getMessage()
    {
        $messages = Contact::all();
        return view('admin_theme.contactMessage', compact('messages'));
    }

    public function showMessage(Contact $message)
    {
        return view('admin_theme.showMessage', compact('message'));
    }
    public function destroy(Contact $message)
    {
        $message->delete();
        return redirect()->route('messages.recent')->with('success', 'Message deleted successfully.');
    }
}
