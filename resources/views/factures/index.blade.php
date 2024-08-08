@extends('layouts.layout')
@section('subtitle', 'الفواتير')

@section('content')

<div class="" dir="rtl">
    <header class="d-flex align-items-center justify-content-between">
        <form action="{#" class="input-group w-50" method="GET">
            <select name="search-filter" class="input-group-text">
                <option class="text-start" value="cin">CIN</option>
                <option class="text-start" value="nom">Nom</option>
                <option class="text-start" value="telephone">Téléphone</option>
            </select>
            <input type="search" name="search-value" class="form-control">
            <button type="submit" class="btn btn-success">Chercher</button>
        </form>
    </header>
    <body>
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>قائمة الفواتير</h2>
                <a href="" class="btn btn-primary">استخراج جميع الفواتير</a>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>رقم العداد</th>
                        <th>تاريخ</th>
                        <th>المبلغ</th>
                        <th>الحجم</th>
                        <th>الحالة</th>
                        <th>استخراج الفاتورة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($factures as $facture)
                    <tr>
                        <td>{{ $facture->id }}</td>
                        <td>{{ $facture->client->nom}}</td>
                        <td>{{ $facture->compteur->numero }}</td>
                        <td>{{ $facture->date }}</td>
                        <td>{{ $facture->montant }}</td>
                        <td>{{ $facture->volume }}</td>
                        <td>{{ $facture->statut }}</td>
                        <td>
                            <a href="{{ route('factures.show', $facture->id) }}" class="btn btn-outline-info">استخراج الفاتورة</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>

@endsection
