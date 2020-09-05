<?php

namespace App\Http\Controllers;

use App\Message;
use App\Providers\MessageWasReceived;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    function __construct() {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function index()
    {
        $messages = Message::with(['user', 'note', 'tags'])->get();
        return view('messages.index', compact('messages'));
    }


    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        // QUERY BUILDER
        // DB::table('messages')->insert([
        //     'nombre' => $request->input('nombre'),
        //     'email' => $request->input('email'),
        //     'mensaje' => $request->input('mensaje'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // ELOQUENT
        $message = Message::create($request->all());

        if (auth()->check()) {
            auth()->user()->messages()->save($message);
        }

        event(new MessageWasReceived($message));

        return redirect()->route('mensajes.create')->with('info', 'Hemos recibido tu mensaje');
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->update($request->all());

        return redirect()->route('mensajes.index');
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id)->delete();
        return redirect()->route('mensajes.index');
    }
}
