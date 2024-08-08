<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('compteur')->get();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('client'));
        $client = Client::create($request->input('client')); // a fieldset table, ex: name="client[nom]"
        $client->compteur()->create($request->input('compteur')); // a fieldset table, ex: name="compteur[numero]"

        return redirect()->back()->with('message', 'تمت الإضافة بنجاح');
    }


    /**
     * Display the specified resource.
     */
    // public function show(Client $client)
    // {
    //     return view('clients.show', compact('client'));
    // }
    // In your Controller
    public function show($id)
    {
        $client = Client::find($id);

        if ($client) {
       
            $facture = $client->factures()->latest()->first(); // Fetch the latest facture, or adjust as needed

            return view('clients.show', ['client' => $client, 'facture' => $facture]);
        } else {
            return abort(404, 'Client not found');
        }
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->input('client'));
        // $client->compteur()->update($request->input('compteur'));

        return redirect()->back()->with('message', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('message', 'تم الحذف بنجاح');
    }
}
