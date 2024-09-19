<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class VilleController extends Controller
{
    public function index()
    {
        $villes = Ville::all();

        return response()->json($villes);
    }

    public function store(Request $request)
    {
        $ville = new Ville([
            'nomVille' => $request->input('nomVille'),
            // Add other attributes as needed
        ]);
        $ville->save();

        return response()->json($ville, 200);
    }

    public function show($id)
    {
        $ville = Ville::find($id);

        return response()->json($ville);
    }

    public function update($id, Request $request)
    {
        $ville = Ville::find($id);
        $ville->update($request->all());

        return response()->json($ville, 201);
    }

    public function destroy($id)
    {
        $ville = Ville::find($id);
        $ville->delete();

        return response()->json('Ville deleted successfully!');
    }
}
