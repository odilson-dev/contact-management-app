<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contacts = Contact::query()
                        ->where('user_id', request()->user()->id)
                        ->orderBy('created_at', 'asc')
                        ->get() // Fetch the collection of contacts
                        ->toArray(); // Convert the collection to an array

        return Inertia::render("Contact/Index", ['contacts'=> $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("Contact/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            
                                    'name'=>'required|string|max:255',
                                    'email'=>'required|string|email', 
                                    'phone_number'=>'required|string'
                                ]);

        Contact::create(['name'=> $request->name, 'email'=> $request->email, 'phone_number'=> $request->phone_number,'user_id' => request()->user()->id]);


        return redirect()->to('/contact')->with('message', 'Contact Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return Inertia::render("Contact/Show", ['contact'=> $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return Inertia::render("Contact/Edit", ['contact'=> $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([ 
            
            'name'=>'required|string|max:255',
            'email'=>'required|string|email', 
            'phone_number'=>'required|string'
        ]);

        $contact->update(['name'=> $request->name, 'email'=> $request->email, 'phone_number'=> $request->phone_number]);


        return redirect()->to('/contact')->with('message', 'Contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
