@extends('layouts.layout')
@section('title','الزبون')

@section('content')
<div class="container">
    <main class="">

        <body class="bg-light">
            <div class="container mt-5">
                <div class="card shadow-sm rounded">
                    <div class="card-header bg-secondary text-white text-center">
                        <h4>معلومات الزبون</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label fw-bold">الاسم</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" value="{{ $client->nom && $client->prenom ? $client->nom . ' ' . $client->prenom : 'غير موجود' }}" readonly>
                                </div>
                            </div>

                            <table class="table table-bordered mt-4">

                                <tbody>
                                    <tr>
                                        <th>رقم البطاقة الوطنية</th>
                                        <td>{{ $client->cin }}</td>
                                    </tr>
                                    <tr>
                                        <th>رقم العداد</th>
                                        <td>{{ $client->compteur->numero }}</td>
                                    </tr>
                                    <tr>
                                        <th>الهاتف</th>
                                        <td>{{ $client->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <th>العنوان</th>
                                        <td>{{ $client->adresse }}</td>
                                    </tr>
                                </tbody>

                            </table>
                        </form>
                    </div>
                </div>
                <div class="mt-4">
                    <!-- TODO -->
                    <a href="#" class="btn btn-primary"> الفواتير</a>
                    <a href="{{ route('statistiques.show', $client) }}" class="btn btn-warning"> الإحصائيات</a>
                    <!-- TODO: ajouter un lien pour les releves, modifier et supprimer -->
                </div>
            </div>
        </body>
    </main>
</div>

@endsection