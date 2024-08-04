<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // TODO
        $statistiques = null;
        return view('statistiques.index', compact('statistiques'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, Request $request)
    {

        $factures = $client->factures()->orderBy('date', 'desc')->get();
        $totals = [
            'totalPaye' => 0,
            'totalNonPaye' => 0,
        ];

        $factures->each(function ($facture) use (&$totals) {
            if ($facture->statut == 'Payée') {
                $totals['totalPaye'] += $facture->montant;
            } elseif ($facture->statut == 'Non Payée') {
                $totals['totalNonPaye'] += $facture->montant;
            }
        });

        return view('statistiques.show', compact('client', 'factures', 'totals'));
    }
}
