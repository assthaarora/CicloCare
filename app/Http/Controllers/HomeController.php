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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
    {
        return view('home.index');
    }
    public function my_prescription(){
        return view('home.index');
    }
    public function new_prescription(){
        return view('home.new_prescription');
    }
 
    public function order_management(){
        return view('home.order_management');
    }

    public function subscription_management(){
        return view('home.subcription_managemnet');
    }
    
}
