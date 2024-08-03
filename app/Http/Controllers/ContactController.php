<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|string|max:15',
            'location' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Create the contact
        $contact = Contact::create($request->except('logo'));

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('public/logos');
            $fileName = $file->getClientOriginalName();
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();

            $contact->media()->create([
                'file_name' => $fileName,
                'file_path' => $path,
                'file_type' => $fileType,
                'file_size' => $fileSize,
                'mediable_id' => $contact->id,
                'mediable_type' => Contact::class,
            ]);
        }

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
            'phone' => 'required|string|max:15',
            'location' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $contact->update($request->except('logo'));

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('public/logos');
            $fileName = $file->getClientOriginalName();
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();

            // Delete old logo if exists
            if ($contact->media->isNotEmpty()) {
                $contact->media->first()->delete();
            }

            $contact->media()->create([
                'file_name' => $fileName,
                'file_path' => $path,
                'file_type' => $fileType,
                'file_size' => $fileSize,
                'mediable_id' => $contact->id,
                'mediable_type' => Contact::class,
            ]);
        }

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
