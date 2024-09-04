<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect(){
        // check user type
        $usertype = Auth::user()->usertype; // coming from the db --  we added a usertype column in the User table
        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }

    public function index(){
        return view('home.userpage');
    }
}
