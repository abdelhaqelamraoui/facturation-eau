<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Facture;
use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $factures = Facture::all();
        $totals = [
            'facture' => [
                'payee' => 0,
                'nonPayee' => 0
            ],
            'montant' => [
                'paye' => 0.0,
                'nonPaye' => 0.0
            ],
        ];

        $factures->each(function ($facture) use (&$totals) {
            if ($facture->statut == 'Payée') {
                $totals['montant']['paye'] += $facture->montant;
                $totals['facture']['payee'] += 1;
            } elseif ($facture->statut == 'Non payée') {
                $totals['montant']['nonPaye'] += $facture->montant;
                $totals['facture']['nonPayee'] += 1;
            }
        });

        $factures = $factures->filter(function ($facture) {
            return $facture->statut == 'Non payée';
        });

        return view('statistiques.index', compact('client', 'factures', 'totals'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, Request $request)
    {

        $factures = $client->factures()->orderBy('date', 'desc')->get();
        $totals = [
            'facture' => [
                'payee' => 0,
                'nonPayee' => 0
            ],
            'montant' => [
                'paye' => 0.0,
                'nonPaye' => 0.0
            ],
        ];

        $factures->each(function ($facture) use (&$totals) {
            if ($facture->statut == 'Payée') {
                $totals['montant']['paye'] += $facture->montant;
                $totals['facture']['payee'] += 1;
            } elseif ($facture->statut == 'Non payée') {
                $totals['montant']['nonPaye'] += $facture->montant;
                $totals['facture']['nonPayee'] += 1;
            }
        });

        $factures = $factures->filter(function ($facture) {
            return $facture->statut == 'Non payée';
        });

        return view('statistiques.show', compact('client', 'factures', 'totals'));
    }
}
