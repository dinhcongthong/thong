<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance. etsttsfdsf
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function postSendMail(Request $request) {
        $mail_data = [
            'subject' => $request->subject,
            'content' => $request->content,
            'owner' => 'Thống đẹp trai',
            'email' => $request->email
        ];
        
        Mail::to([$mail_data['email']])->send(new DemoMail($mail_data));
        return redirect('/');
    }
}
