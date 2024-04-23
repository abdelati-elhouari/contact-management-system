<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:70',
            'email' => 'required|max:100|email',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);
        if (Contact::where('email', $validatedData['email'])->exists()) {
            return redirect()->route('contacts.index')->with('error', 'Email already exists.');
        }
        $contact=Contact::create($validatedData);

        if (!$contact) {
          
            return redirect()->route('contacts.index')->with('error', 'Failed to create contact.');
        }

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }


    public function edit(Contact $contact)
    {
        return view('./pages/update', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,'.$contact->id,
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $contact->update($validatedData);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}

