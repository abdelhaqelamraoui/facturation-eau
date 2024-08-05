@extends('layouts.layout')

@section('content')
<div class="" dir="rtl">
    <header class="d-flex align-items-center justify-content-between mb-3">
        <a href="{{ route('clients.create') }}" class="btn btn-primary px-3">اضافة زبون</a>

        <form action="" class="input-group w-50" method="GET">
        <form action="" class="input-group w-50" method="GET">
            <select name="search-filter" class="input-group-text">
                <option class="text-start" value="cin">رقم الهوية</option>
                <option class="text-start" value="nom">الاسم</option>
                <option class="text-start" value="telephone">الهاتف</option>
                <option class="text-start" value="cin">رقم الهوية</option>
                <option class="text-start" value="nom">الاسم</option>
                <option class="text-start" value="telephone">الهاتف</option>
            </select>
            <input type="search" name="search-value" class="form-control">
            <button type="submit" class="btn btn-success">بحث</button>
            <button type="submit" class="btn btn-success">بحث</button>
        </form>
    </header>

    <main class="">
        <div class="container-fluid"> <!-- استخدم container-fluid لتغطية العرض الكامل -->
            <h1 class="h3 mb-3">العملاء</h1>
            <div class="row">
                <div class="col-xl-12"> <!-- استخدم col-xl-12 لعرض الجدول في الصفحة بالكامل -->
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">العملاء</h5>
                        </div>
                        <div class="card-body p-0"> <!-- إزالة الهوامش الداخلية -->
                            <table class="table table-striped w-100"> <!-- استخدم w-100 لجعل الجدول يملأ العرض بالكامل -->
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
                                                echo  $counter ;
                                                $counter++;           @endphp
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

