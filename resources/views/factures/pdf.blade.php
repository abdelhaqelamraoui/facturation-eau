@extends('layouts.layout')
@section('subtitle','استخراج فاتورة')

@section('content')
<div class="container">

    <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>فاتورة رقم {{ $facture->id }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            direction: rtl;
            text-align: right;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid #ddd;
        }
        .table th, .table td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>فاتورة رقم {{ $facture->id }}</h2>
            </div>
            <div class="card-body">
                <p><strong>الاسم:</strong> {{ $facture->client ? $facture->client->nom : 'غير موجود' }}</p>
                <p><strong>رقم العداد:</strong> {{ $facture->compteur_id }}</p>
                <p><strong>تاريخ:</strong> {{ $facture->date }}</p>
                <p><strong>المبلغ:</strong> {{ $facture->montant }}</p>
                <p><strong>الحجم:</strong> {{ $facture->volume }}</p>
                <p><strong>الحالة:</strong> {{ $facture->statut }}</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>البيان</th>
                            <th>القيمة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>الاستهلاك السابق (م³)</td>
                            <td>{{ $facture->previous_consumption }}</td>
                        </tr>
                        <tr>
                            <td>الاستهلاك الحالي (م³)</td>
                            <td>{{ $facture->current_consumption }}</td>
                        </tr>
                        <tr>
                            <td>الفرق (م³)</td>
                            <td>{{ $facture->current_consumption - $facture->previous_consumption }}</td>
                        </tr>
                        <tr>
                            <td>الحالة</td>
                            <td>{{ $facture->statut }}</td>
                        </tr>
                        <tr>
                            <td>الثمن (بالدرهم)</td>
                            <td>{{ $facture->montant }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
</div>

@endsection
