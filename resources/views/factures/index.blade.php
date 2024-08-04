@extends('layouts.layout')
@section('subtitle', 'الفواتير')

@section('content')

<div class="d-flex flex-column justify-content-between h-100">
    <header class="d-flex align-items-center justify-content-between">
        <a href="#" class="btn btn-primary px-3">Nouveau</a>

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

    <main class="d-flex flex-column justify-content-between h-100 flex-grow-1">
    <!-- TODO -->

    </main>






</div>

@endsection