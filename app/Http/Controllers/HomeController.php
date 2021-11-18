<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $book = DB::table('books')->get();
        return view('home',compact('book'));
    }
    public function Add(Request $request)
    {
            $data = array();
           $data['user_id'] = $request->user_id;
           $data['user_name'] = $request->user_name;
           $data['book_id'] = $request->book_id;
           $data['book_title'] = $request->book_title;
           $data['status'] = $request->status;

           DB::table('subscribes')->insert($data);

           $book = DB::table('books')->get();

           
        return view('home',compact('book'));
    }
}
