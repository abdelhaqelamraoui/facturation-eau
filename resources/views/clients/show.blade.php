@extends('layouts.layout')

@section('title', 'Client Details')

@section('content')

@if ($client)
    <table class="table">
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
                <td>{{ $client->meter }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>Client not found.</p>
@endif

@endsection

