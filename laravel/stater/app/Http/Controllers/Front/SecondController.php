<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{
    public function __Construct(){
        $this -> middleware('auth') -> except('seconds3');
    }
    public function seconds0(){
        return "showsecondmethod0";
    }
    public function seconds1(){
        return "showsecondmethod1";
    }
    public function seconds2(){
        return "showsecondmethod2";
    }
    public function seconds3(){
        return "showsecondmethod3";
    }
    public function seconds4(){
        return "showsecondmethod4";
    }
}
