<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AppController extends Controller
{
    function publicMessage(Request $request){
        return response("This is for everyone",200);
    }

    function secretMessage(Request $request){
        //if(!Auth::check()){
           // return response("You are not logged in",401);

       // }
        return response("This is for log in users",200);
    }
}
