<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sysuser;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $session = $request->session()->exists('id');
        if(!$session){
            return view('auth.login');
        }else{
            return redirect('/');
        }
    }
}
