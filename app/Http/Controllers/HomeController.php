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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a = TestHelper('người đẹp trai là: ');
        return $a;
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

    public function phone_list () {
        // $phone_list = IphoneList::with(['getPhone'])->get();
        $phone_list = Phone::with(['getIphone'])->has('getIphone')->toSql();
        return $phone_list;
        return view('list_test')->with(['phone_list' => $phone_list]);
    }

    public function post_save (Request $request) {
        $data = [
            'name' => $request->name,
            'origin' => $request->origin,
            'phone_id' => 2
        ];
        $iphone = IphoneList::create($data);
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
