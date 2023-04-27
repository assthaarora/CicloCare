<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PatientController extends Controller
{
  public function users_profile(){
    $patient_data=DB::table('users')->join('usersdetails', 'users.id', '=','usersdetails.refrence_id')->where('users.id',Auth::user()->id)->first();
// dd($patient_data);
    return view('home.users-profile',compact('patient_data'));
  }
}
