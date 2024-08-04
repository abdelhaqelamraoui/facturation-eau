<?php

namespace App\Http\Controllers;

use App\Models\Compteur;
use App\Models\Releve;
use Illuminate\Http\Request;

class ReleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $releves = Releve::all();
        // TODO : inclure les client et les compteurs
        return view('releves.index', compact('releves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO : doit être dans la même interfce que la liste des releves
        return view('releves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compteur = Compteur::findOrFail($request->only('numero'));
        $client = $compteur->client()->get();

        $compteur->releves()->create($request->except('numero'));
        return redirect()->back()->with('success', "$client->nom $client->prenom");
    }

    /**
     * Display the specified resource.
     */
    public function show(Releve $releve)
    {
        return view('releves.show', compact('releve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Releve $releve)
    {
        return view('releves.edit', compact('releve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Releve $releve)
    {
        $releve->update($request->all());
        return redirect()->back()->with('success', 'Releve ifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Releve $releve)
    {
        $releve->delete();
        return redirect()->back()->with('success', 'Releve supprimé');
    }
}
