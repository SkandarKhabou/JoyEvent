<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();

        return response()->json($hotels);
    }

    public function store(Request $request)
    {
        $hotel = new Hotel([
            'photo' => $request->input('photo'),
            'villeID' => $request->input('villeID'),
            'nomHotel' => $request->input('nomHotel'),
            'adress' => $request->input('adress'),
            'nbEtoile' => $request->input('nbEtoile'),
            'MatriculeFiscale' => $request->input('MatriculeFiscale'),
            'Email' => $request->input('Email'),
            'Password' => md5($request->input('Password')),
        ]);
    
        $hotel->save();
    
        return response()->json($hotel, 200);
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);

        return response()->json($hotel);
    }

    public function update($id, Request $request)
    {
        $hotel = Hotel::find($id);
        $hotel->update($request->all());

        return response()->json($hotel, 201);
    }

    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return response()->json('Hotel deleted successfully!');
    }
}
