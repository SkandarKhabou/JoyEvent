<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return response()->json($reservations);
    }

    public function store(Request $request)
    {
        $reservation = new Reservation([
            'eventID' => $request->input('eventID'),
            'clientID' => $request->input('clientID'),
            'nbPlaces' => $request->input('nbPlaces'),
            'PrixTotal' => $request->input('PrixTotal'),
            'etat' => $request->input('etat'),
            // Add other attributes as needed
        ]);
        $reservation->save();

        return response()->json($reservation, 200);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);

        return response()->json($reservation);
    }

    public function update($id, Request $request)
    {
        $reservation = Reservation::find($id);
        $reservation->update($request->all());

        return response()->json($reservation, 201);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return response()->json('Reservation deleted successfully!');
    }
}
