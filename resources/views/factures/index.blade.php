@extends('layouts.layout')
@section('subtitle', 'الفواتير')

@section('content')

<div class="container">
    <header class="d-flex align-items-center justify-content-between">
        <!-- TODO -->
        <!-- <form action="#" class="input-group w-50" method="GET">
            <select name="search-filter" class="input-group-text">
                <option class="text-start" value="cin">CIN</option>
                <option class="text-start" value="nom">Nom</option>
                <option class="text-start" value="telephone">Téléphone</option>
            </select>
            <input type="search" name="search-value" class="form-control">
            <button type="submit" class="btn btn-success">Chercher</button>
        </form> -->
    </header>

    <body>
        <div class="container mt-4">
            <div class="card p-0">
                <div class="card-body p-0">


                    <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>رقم العداد</th>
                                <th>التاريخ</th>
                                <th>الحجم</th>
                                <th>المبلغ (درهم)</th>
                                <th>الحالة</th>
                                <th>استخراج الفاتورة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($factures as $facture)
                            <tr>
                                <td class="fw-bold">{{ $facture->id }}</td>
                                <td>{{ $facture->client->nom . ' ' . $facture->client->prenom}}</td>
                                <td>{{ $facture->compteur->numero }}</td>
                                <td>{{ $facture->date }}</td>
                                <td>{{ $facture->volume }}</td>
                                <td>{{ $facture->montant }}</td>

                                @if ($facture->statut == 'Payée')
                                <td class="text-success"> مستخلصة</td>
                                @elseif ($facture->statut == 'Non payée')
                                <td class="text-danger"> غير مستخلصة</td>
                                @endif

                                <td class="text-center">
                                    <a href="{{ route('factures.show', $facture->id) }}" class="btn btn-sm btn-outline-info">استخراج الفاتورة</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</div>

@endsection