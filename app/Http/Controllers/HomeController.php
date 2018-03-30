<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        return view('home');

        // Learning about Sessions
        //$request->session()->put(['Teacher'=>'Master Suneet Arora']);
        // or the following way:
        //session(['Teacher'=>'The Master - Suneet Arora']);

        //$request->session()->forget('Teacher');

//        $request->session()->flush();
        //echo $request->session()->get('Teacher');

//        return $request->session()->all();

        // Flash data. It is a session key-value that is available for some time/one request.
        // No need to forget() it explicitly.
//        $request->session()->flash('Message', 'The mail has been delivered to Suneet!');
//        $request->session()->reflash();
//        $request->session()->keep('Message');
        //echo $request->session()->get('Message');
        //read online documentation for details.


    }
}
