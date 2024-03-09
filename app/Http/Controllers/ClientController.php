<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Client;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::all();

        return view('clients.index',compact('client'),

        );

    }
//    public function dashbord()
//    {
//
//
//        return view("dashbord" );
//
//
//    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client =new Client();
        return view("clients.create",["cl"=>$client]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Valider les données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|',
            'sexe' => 'required|in:M,F',
        ], [
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'adresse.required' => 'Le champ adresse est requis.',
            'telephone.required' => 'Le champ telephone est requis.',
            'sexe.required' => 'Le champ sexe est requis.',


        ]);
        // return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès.');
        $cl= new Client();
        $cl->nom=$request["nom"];
        $cl->prenom=$request["prenom"];
        $cl->adresse=$request["adresse"];
        $cl->telephone=$request["telephone"];
        $cl->sexe=$request["sexe"];
        $cl->save();
        return to_route("ajoutclient")->with('success', 'Client ajouté avec succès.');
    }


    /**
     * Display the specified resource.
     */


    public function show($id)
    {
        $client = Client::findOrFail($id); // Assurez-vous d'avoir importé le modèle Client

        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Charger le client spécifique à modifier
        $client = Client::find($id);

        // Vérifier si le client existe
        if (!$client) {
            return redirect()->route("upclient", $id)->with('error', 'Client non trouvé.');
        }

        // Passer l'objet client à la vue
        return view("clients.edit", ["client" => $client]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)

    {
        // Valider les données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|numeric|',
            'sexe' => 'required|in:M,F',
        ], [
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'adresse.required' => 'Le champ adresse est requis.',
            'telephone.required' => 'Le champ telephone est requis.',
            'sexe.required' => 'Le champ sexe est requis.',

        ]);
        $client= Client::find($id);
        $client->nom=$request["nom"];
        $client->prenom=$request["prenom"];
        $client->adresse=$request["adresse"];
        $client->telephone=$request["telephone"];
        $client->sexe=$request["sexe"];
        $client->save();
        return to_route("clients.index")->with('success', 'Client modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::destroy($id);
        return to_route("client")->with('success', 'Client supprimer avec succès.');
    }


    public function dewlodpdf()
    {
        $pdf = PDF::loadView('clients.listeclientpdf');

        return $pdf->download('laliste.pdf');

    }
}
