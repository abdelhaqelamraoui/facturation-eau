@extends('layouts.layout')
@section('subtitle', 'الزبناء')
@section('content')
<div class="container">
    <header class="d-flex align-items-center justify-content-between mb-3">
        <a href="{{ route('clients.create') }}" class="btn btn-primary px-3">اضافة زبون</a>
        <!-- TODO -->
        <!-- <form action="" class="input-group w-50" method="GET">
            <form action="" class="input-group w-50" method="GET">
                <select name="search-filter" class="input-group-text">
                    <option class="text-start" value="cin">رقم الهوية</option>
                    <option class="text-start" value="nom">الاسم</option>
                    <option class="text-start" value="telephone">الهاتف</option>
                    <option class="text-start" value="cin">رقم الهوية</option>
                    <option class="text-start" value="nom">الاسم</option>
                    <option class="text-start" value="telephone">الهاتف</option>
                </select>
                <input type="search" name="search-value" class="form-control ">
                <button type="submit" class="btn btn-success m-2">بحث</button>
            </form> -->
    </header>
    <main class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 p-0 m-0">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped table-bordered w-100 m-0">
                                <thead class="table-success">
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>رقم البطاقة الوطنية</th>
                                        <th> العنوان</th>
                                        <th colspan="" class="text-center">الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $index => $client)
                                    <tr>
                                        <td class="fw-bold">{{ $clients->firstItem() + $index }} </td>
                                        <td>{{ $client->nom . ' ' . $client->prenom }}</td>
                                        <td>{{ $client->cin }}</td>
                                        <td style="width: 20%;">{{ $client->adresse }}</td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-outline-success btn-sm">تفاصيل</a>
                                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-outline-primary btn-sm">تعديل</a>

                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العميل؟');">حذف</button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        {{ $clients->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection