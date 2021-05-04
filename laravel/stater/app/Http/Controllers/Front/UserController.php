<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showuser(){
        return "welcome" ;
    }
    public function showid(){
        return 'myid';
    }
    public function myview(){
        // $data['name'] = 'nashaat';
        // $data['age'] = 22 ;
       
        $data = [];
        return view('welcome',compact('data')); 

    }
}
