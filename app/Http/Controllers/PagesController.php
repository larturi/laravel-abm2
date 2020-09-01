<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function saludo($nombre = 'Invitado') {
        return view('saludo', compact('nombre'));
    }

}
