<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    public function dashboard(){
        return view('adminlayout.admin-index');
    }
    public function specialization(){
        return view('layouts.specialization');
    }
}
