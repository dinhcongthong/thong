<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\IphoneList;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
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

    public function delete_list () {
        $phone_list = IphoneList::all();
        return view('list_test')->with(['phone_list' => $phone_list]);
    }

    public function post_save (Request $request) {
        $phoneId = 1;
        $phone = new Phone(['name' => 'iphone', 'origin' => 'trung quoc']);
        
        $iphone = IphoneList::find(1);
        $iphone = $iphone->getPhone()->save($phone);
        if (!$iphone) {
            echo ('loi cmnr!');
        }
        return redirect('/list');
    }

    public function post_delete (Request $request) {
        $iphone = IphoneList::find($request->id);
        $iphone = $iphone->delete();
        if (!$iphone) {
            echo ('lỗi cmnr!');
        }
        $phone_list = IphoneList::all();
        return view('list_test')->with(['phone_list' => $phone_list]);
    }
}
