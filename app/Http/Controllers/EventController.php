<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Nessa linha importamos o model
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        // Aqui resgatamos todos os dados do DB
        $events = Event::all();
        return view('events.events', ['events' => $events]);
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
