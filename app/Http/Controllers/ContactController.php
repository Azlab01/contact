<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Http\Requests\{CreateContactRequest, UpdateContactRequest};
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    
    public function __construct(ContactRepository $repository)
    {
        $this->repo = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContactRequest $request)
    {
        $inputs = $request->all();
        if (request()->hasFile('avatar')) {
            $path = $request->file("avatar")->store("avatars");
            $inputs["avatar"] = $path; 
        }
        $this->repo->store($inputs);
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('show', compact("contact"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $id = $contact->id;
        $inputs = $request->all();        
        if (request()->hasFile('avatar')) {
            Storage::disk('public')->delete($contact->avatar); 
            $path = $request->avatar->store("avatars");
            $inputs["avatar"] = $path; 
        }
        $this->repo->update($id, $inputs);

        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {             
        if ($contact->avatar) {
            Storage::disk('public')->delete($contact->avatar); 
        }
        $this->repo->destroy($contact->id);
        return redirect()->route('contacts.index');
    }
}
