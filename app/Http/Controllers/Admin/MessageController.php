<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Reply;
use App\Support\MessageSupport;
use Illuminate\Http\Request;
use Mail;
use Auth;

class MessageController extends Controller
{
    protected $messageSupport;
    protected $folder_name = 'admin.message.';
    function __construct(MessageSupport $messageSupport)
    {
        $this->middleware('auth');
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
        return view($this->folder_name.'mail-index', ['mails'=>$this->messageSupport->getAll(), 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        $message->is_read=1;
        if($message->save())
        {
            // returning message show
            return view($this->folder_name.'mail-show', [
                'message'=>$message,
                'messages'=>$this->messageSupport->getOnlyNotRead(),
            ]);
        }else{
            return back()->with('error', 'Could not read please try again later');
        }
    }


    public function getReply(Message $message)
    {
        return view($this->folder_name.'mail-reply', ['messages'=>$this->messageSupport->getOnlyNotRead(), 'message'=>$message]);
    }
    

    public function postReply(Request $request, Message $message)
    {
      
         $reply = new Reply();
         $reply->fill($request->all());
         $reply->admin_id = Auth::user()->id;
         $reply->message_id = $message->id;
         $reply->count = count(Reply::all()) + 1;

        $data=array(
            'from'=>SITE_EMAIL,
            'email'=>$message->email,
            'subject'=>$request->subject,
            'content'=>$request->message,
        );


         if($reply->save())
         {
            Mail::send('emails.subscriber-mail',$data, function ($message) use ($data){
                 $message->from($data['from']);
                 $message->to($data['email']);
                 $message->subject($data['subject']);
             });
            return redirect()->route('admin.dashboard')->with('success', 'Successfully Email Sent ');
         }else{
            return back()->withInput()->wihth('error', 'Could not send Please Try Later');
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message, $id)
    {
        //
        $message = Message::findOrFail($id);
        if($message->delete()){
            return redirect()->route('message.index')->with('success', 'Successfully Message Deleted');
        }else{
            return back()->with('error', 'Could not be deleted please try again later');
        }
    }
}
