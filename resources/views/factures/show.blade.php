@extends('layouts.layout')
@section('subtitle','فاتورة')

@section('content')
<div class="container">
    <main class="" dir="rtl">

        <body class="bg-light">
            <div class="container mt-5">
                <div class="card shadow-sm rounded">
                    <div class="card-header bg-secondary text-white text-center">
                        <h2>فاتورة ماء</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- <div class="form-group row">
                                <label for="invoiceNumber" class="col-sm-2 col-form-label">رقم الفاتورة</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="invoiceNumber" value="{{ $facture->id }}" readonly>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">الزبون</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" value="{{$facture->client->nom . ' ' . $facture->client->prenom }}" readonly>
                                </div>
                            </div>

                            <table class="table table-bordered mt-4">
                                <tbody>

                                    <tr>
                                        <th>الحالة</th>
                                        <td>
                                            @if ($facture->statut == 'Payée')
                                            مستخلصة
                                            @elseif ($facture->statut == 'Non payée')
                                            غير مستخلصة
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>رقم العداد </th>
                                        <td>{{ $facture->compteur->numero }}</td>
                                    </tr>
                                    <tr>
                                        <th>الحجم المستهلك</th>
                                        <td>{{ $facture->volume }}</td>
                                    </tr>
                                    <tr>
                                        <!-- FIXME : qu'est ce que ça veut dire la date, c le mois et l'année qui sont importnts -->
                                        <th>التاريخ</th>
                                        <td>{{ $facture->date }}</td>
                                    </tr>
                                    <tr>
                                        <th>الثمن (بالدرهم)</th>
                                        <td>{{ $facture->montant }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="text-center">
                            <a href="
                                    {{-- {{ route('invoices.export', $facture->id) }} --}}
                                     " class="btn btn-success px-5">استخراج الفاتورة</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </main>
</div>
@endsection