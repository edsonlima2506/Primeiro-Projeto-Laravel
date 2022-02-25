<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('events.events');
    }

    public function create() {
        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }

    public function signup() {
        return view('signup');
    }
}
