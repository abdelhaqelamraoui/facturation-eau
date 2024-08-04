@extends('layouts.layout')

@section('title', 'Client Details')

@section('content')

@if ($client)
    <table class="table">
        <thead>
            <tr>
                <th>رقم الهوية</th>
                <th>الاسم</th>
                <th>الهاتف</th>
                <th>المرجع</th>
                <th>العداد</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $client->cin }}</td>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->reference }}</td>
                <td>{{ $client->meter }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>Client not found.</p>
@endif

@endsection
