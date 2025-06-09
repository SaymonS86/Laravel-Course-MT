<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{

    public function index()
    {
        
        $search = request('search');

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%' . $search . '%'] 
            ])->get();   
        } else {
            $events = Event::all();
        }

    return view('welcome', compact('events', 'search') /*['events' => $events, 'search' => $search]*/);
    //comapct, forma mais simples de fazer o mesmo comando no laravel.
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
        $event->date = $req->date;
        $event->private = $req->private;
        $event->description = $req->description;
        $event->items = $req->items;
    
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $reqImage = $req->file('image');
            $extension = $reqImage->extension();
            $imageName = md5($reqImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $reqImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
    
        $user = Auth::user();
        $event->user_id = $user->id;


        $event->save();
    
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
    $event = Event::findOrFail($id);

    $eventOwner = User::where('id', $event->user_id)->first()->toArray();
    
    return view('events/show',compact('event', 'eventOwner'));
    }

    public function dashboard() {
        $user = Auth::user();

        $events = $user->events;

        return view('events/dashboard', compact('events'));
    }

    public function destroy($id) {
        
        Event::findOrFail($id)->delete();

        return redirect(route('user.dashboard'))->with('msg','Evento excluído com sucesso!');

    }

    public function edit($id) {
        $event = Event::findOrFail($id);

        return view('events/edit', compact('event'));
    }

    public function update(Request $req) {
        
        Event::findOrFail($req->id)->update($req->all());

        return redirect(route('user.dashboard'))->with('msg','Evento excluído com sucesso!');

    }
}
