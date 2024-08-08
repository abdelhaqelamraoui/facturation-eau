@extends('layouts.layout')
@section('title','الزبون')

@section('content')
    <div class="container">
        <main class="" dir="rtl">
            <body class="bg-light">
                <div class="container mt-5">
                    <div class="card shadow-sm rounded">
                        <div class="card-header bg-secondary text-white text-center">
                            <h4>معلومات الزبون</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="invoiceNumber" class="col-sm-2 col-form-label">رقم الفاتورة</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="invoiceNumber" value="{{ $facture->id }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">الاسم</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" value="{{ $client->nom && $client->prenom ? $client->nom . ' ' . $client->prenom : 'غير موجود' }}" readonly>
                                    </div>
                                </div>

                                <table class="table table-bordered mt-4">
                                   
                                    <tbody>
                                        <tr>
                                            <td>العداد</td>
                                            <td>{{ $facture->compteur->numero }}</td>
                                        </tr>
                                        <tr>
                                            <td>رقم البطاقة الوطنية</td>
                                            <td>{{ $client->cin }}</td>
                                        </tr>
                                        <tr>
                                            <td>الهاتف</td>
                                            <td>{{ $client->telephone }}</td>
                                        </tr>
                                        <tr>
                                            <td>العنوان</td>
                                            <td>{{ $client->adresse }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </body>
        </main>
    </div>

@endsection
