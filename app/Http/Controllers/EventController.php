<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function event()  {

        $events = Event::all();

        return view('events/createvents', ['events' => $events]);
    }

    public function store(Request $req)
    {
    
        $event = new Event;
        $event->city = $req->city;
        $event->title = $req->title;
        $event->private = $req->private;
        $event->description = $req->description;
    
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $reqImage = $req->file('image');
            $extension = $reqImage->extension();
            $imageName = md5($reqImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $reqImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
    
        $event->save();
    
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function dataBase(Request $req)
    {
    
        $event = new Event;
        $event->name = $req->name;
        $event->password = $req->password;
        $event->email = $req->email;
        $event->age = $req->age;
    
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $reqImage = $req->file('image');
            $extension = $reqImage->extension();
            $imageName = md5($reqImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $reqImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
    
        $event->save();
    
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}