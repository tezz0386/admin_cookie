<?php

namespace App\Http\Controllers;

use App\Support\MessageSupport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $messageSupport;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MessageSupport $messageSupport)
    {
        $this->middleware('auth');
        $this->messageSupport = $messageSupport;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', ['messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }
}
