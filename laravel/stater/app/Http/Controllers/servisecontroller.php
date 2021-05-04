<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

class servisecontroller extends Controller
{
    
public function redirect($service){
return socialite::driver($service)->redirect();

}
public function callback($service){
  $user=Socialite::with($service);
 return response()->json($user);

}

}
