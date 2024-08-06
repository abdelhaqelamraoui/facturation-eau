<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // الحصول على جميع الفواتير مع معلومات الزبون المرتبط بها
        $factures = Facture::with('client')->get();
        return view('factures.index', compact('factures'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Facture $facture)
    {
        // TODO: afficher une facture avec une format imprimable
        return view('factures.show', compact('facture'));
    }

    /**
     * Print an invoice
     */
    public function print(Facture $facture)
    {
        // TODO: imprimer une facture
    }
}
