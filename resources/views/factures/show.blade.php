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
                                    <div class="form-group row">
                                        <label for="invoiceNumber" class="col-sm-2 col-form-label">رقم الفاتورة</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="invoiceNumber" value="{{ $facture->id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">الاسم</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" value="{{ $facture->client ? $facture->client->nom : 'غير موجود' }}" readonly>
                                        </div>
                                    </div>

                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">البيان</th>
                                                <th scope="col">القيمة</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>الحالة</td>
                                                <td>{{ $facture->statut }}</td>
                                            </tr>
                                            <tr>
                                                <td>العداد</td>
                                                <td>{{ $facture->compteur_id }}</td>
                                            </tr>
                                            <tr>
                                                <td>الحجم</td>
                                                <td>{{ $facture->volume }}</td>
                                            </tr>
                                            <tr>
                                                <td>التاريخ</td>
                                                <td>{{ $facture->date }}</td>
                                            </tr>
                                            <tr>
                                                <td>الثمن (بالدرهم)</td>
                                                <td>{{ $facture->montant }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="text-center">
                                    <a href="
                                    {{-- {{ route('invoices.export', $facture->id) }} --}}
                                     " class="btn btn-success">استخراج الفاتورة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </main>
        </div>
        @endsection


