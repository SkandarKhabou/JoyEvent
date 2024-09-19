<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class SalleController extends Controller
{
    public function index()
    {
        $salles = Salle::with('hotels')->get();
        return response()->json($salles);
    }


    public function store(Request $request)
    {
        $salle = new Salle([ 
            'nom_Salle' => $request->input('nom_Salle'),
            'capacité' => $request->input('capacité'),
            'etage' => $request->input('etage'),
            'hotelID' => $request->input('hotelID'),
        ]);
        $salle->save();
    
        return response()->json($salle, 200);
    }

    public function show($id)
    {
        $salle = Salle::find($id);

        return response()->json($salle);
    }

    public function update($id, Request $request)
    {
        $salle = Salle::find($id);
        $salle->update($request->all());

        return response()->json($salle, 201);
    }

    public function destroy($id)
    {
        $salle = Salle::find($id);
        $salle->delete();

        return response()->json('Salle deleted successfully!');
    }
}
