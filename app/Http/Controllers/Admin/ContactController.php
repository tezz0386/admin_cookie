<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use App\Support\MessageSupport;
use App\Support\SiteSupport;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $messageSupport;
    protected $folder_name = 'admin.site.contact.';
    function __construct(SiteSupport $siteupport, MessageSupport $messageSupport)
    {
        $this->middleware('auth');
        $this->support= $siteupport;
        $this->messageSupport = $messageSupport;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view($this->folder_name.'contact-index', ['contacts'=>$this->support->getAllContacts(), 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view($this->folder_name.'contact-create', ['messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        //
        $this->support->storeContact($request);
        return redirect()->route('contact.index')->with('success', 'Successfully 1 contact added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        return view($this->folder_name.'contact-edit', ['contact'=>$contact, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
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
        //
        // return $contact;
        $this->support->updateContact($request, $contact);
        return redirect()->route('contact.index')->with('success', 'Successfully 1 contact updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        if($contact->delete()){
            return redirect()->route('contact.index')->with('success', 'Successfully 1 contact has deleted');
        }
    }
}
