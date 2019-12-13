<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('/admin/dashboard');
    }
    public function tabel(){
        return view('/admin/tabel');
    }
}
