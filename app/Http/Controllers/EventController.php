<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::with("salles")->get();

        return response()->json($events);
    }

    public function store(Request $request)
    {
        $event = new Event([
            'photo' => $request->input('photo'),
            'salleID' => $request->input('salleID'),
            'Titre' => $request->input('Titre'),
            'CapacitéEvent' => $request->input('CapacitéEvent'),
            'CapacitéRestante' => $request->input('CapacitéEvent'),
            'DateDebut' => $request->input('DateDebut'),
            'DateFin' => $request->input('DateFin'),
            'Durée' => $request->input('Durée'),
            'PrixTicket' => $request->input('PrixTicket'),
        ]);
        $event->save();

        return response()->json($event, 200);
    }

    public function show($id)
    {
        $event = Event::find($id);

        return response()->json($event);
    }

    public function update($id, Request $request)
    {
        $event = Event::find($id);
        $event->update($request->all());

        return response()->json($event, 201);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return response()->json('Event deleted successfully!');
    }
}
