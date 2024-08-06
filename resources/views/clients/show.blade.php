@extends('layouts.layout')
@section('title','الزبون')

@section('content')
<div class="container">

    <div class="" dir="rtl">
        @if ($client)
        <div class="card">
            <div class="card-header">
                <h4>معلومات الزبون</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>رقم البطاقة الوطنية</th>
                            <th>الهاتف</th>
                            <th>العنوان</th>
                            <th>قيمة العداد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $client->nom }} {{ $client->prenom }}</td>
                            <td>{{ $client->cin }}</td>
                            <td>{{ $client->telephone }}</td>
                            <td>{{ $client->adresse }}</td>
                            <td>{{ $client->compteur->compteur_id}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="alert alert-danger" role="alert">
            لم يتم العثور على الزبون.
        </div>
        @endif
    </div>

@endsection
