<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
public function LogOut(){
Auth::logout();
}
}
