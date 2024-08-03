<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ContactUs::orderBy('created_at', 'desc')->get();
        $unreadCount = ContactUs::where('read', false)->count();
        return view('dashboard.contactUs.index', compact('messages', 'unreadCount'));
    }

    public function markAsRead($id)
    {
        $message = ContactUs::findOrFail($id);
        $message->read = true;
        $message->save();

        return redirect()->route('contact_us.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.app');
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'text' => 'required|string',  // Ensure this matches your form input name
        ]);

        ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'text' => $request->input('text'),  // Ensure this matches your form input name
        ]);

        return back()->with('success', 'Message sent successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        return view('contact_us.edit', compact('contactUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'text' => 'required|string',
        ]);

        $contactUs->update($request->all());

        return redirect()->route('contact_us.index')->with('success', 'Message updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        $contactUs->delete();

        return redirect()->route('contact_us.index')->with('success', 'Message deleted successfully.');
    }
}
