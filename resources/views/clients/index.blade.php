@extends('layouts.layout')
@section('subtitle', 'الزبناء')

@section('content')

<div class="d-flex flex-column justify-content-between h-100">
    <header class="d-flex align-items-center justify-content-between">
        <a href="{{ route('clients.create') }}" class="btn btn-primary px-3">إضافة زبون</a>

        <form action="{{ route('clients.index') }}" class="input-group w-50" method="GET">

            <select name="search-filter" class="p">
                <option class="text-start" value="cin">رقم الهوية</option>
                <option class="text-start" value="nom">الاسم</option>
                <option class="text-start" value="telephone">الهاتف</option>
                <option class="text-start" value="cin">رقم الهوية</option>
                <option class="text-start" value="nom">الاسم</option>
                <option class="text-start" value="telephone">الهاتف</option>
            </select>
            <input type="search" name="search-value" class="form-control">
            <button type="submit" class="btn btn-success ">بحث</button>
        </form>
    </header>

    <main class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-body p-0">
                        <table class="table table-striped table-bordered mt-4 100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>رقم البطاقة الوطنية</th>
                                    <th> العنوان</th>
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $counter = 1;

                                @endphp
                                @foreach ($clients as $client)
                                <tr data-id="{{ $client->id }}">
                                    <td>
                                        @php
                                        echo $counter ;
                                        $counter++; @endphp
                                    </td>
                                    <td>{{ $client->nom }} {{ $client->prenom }}</td>
                                    <td>{{ $client->cin }}</td>
                                    <td style="width: 20%;">{{ $client->adresse }}</td>
                                    {{-- <td>{{ $client->meter }}</td> --}}
                                    <td>
                                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-outline-success btn-sm">تفاصيل</a>
                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-outline-primary btn-sm">تعديل</a>

                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العميل؟');">حذف</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@endsection