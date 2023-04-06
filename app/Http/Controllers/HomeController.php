<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){

        $role=Auth::user()->role;

        if($role=='3'){
            return view('admin.dashboard');
        }
        else if($role=='2'){
            return view('capturista.dashboard');
        }
        else if($role=='1'){
            return view('carpintero.dashboard');
        }
        else {
            return view('usuario.index');
        }
    }
}
