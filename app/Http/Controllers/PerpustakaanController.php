<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index(){
        return view('index');
    }
    public function book(){
        return view('book');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function dashboard(){
        return view('dashboard');
    }

 
}
