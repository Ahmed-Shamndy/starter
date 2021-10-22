<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public Function showUserName(){
        return 'Ahmed Shamndy';
   }

   public function getIndex(){
        $data=[];
        $data['id']=5;
        $data['name']='Ahmed Shamndy';

        //$obj = new \stdClass();
        //$obj->name='Ahmed Shamndy';
        //$obj->gender='Male';
        //$obj->id=5;



        return view('welcome',compact('$data'));
   }
}
