@extends('layouts.layout')
@section('subtitle', 'المرضى')

@section('content')

<div class="d-flex flex-column justify-content-between h-100" dir="rtl">
    <header class="d-flex align-items-center justify-content-between">
        <a href="{{ route('clients.create') }}" class="btn btn-primary px-3">جديد</a>

        <form action="" class="input-group w-50" method="GET">
            <select name="search-filter" class="input-group-text">
                <option class="text-start" value="cin">رقم الهوية</option>
                <option class="text-start" value="nom">الاسم</option>
                <option class="text-start" value="telephone">الهاتف</option>
            </select>
            <input type="search" name="search-value" class="form-control">
            <button type="submit" class="btn btn-success">بحث</button>
        </form>
    </header>

    <main class="d-flex flex-column justify-content-between h-100 flex-grow-1">
        <div class="container">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3">العملاء</h1>
                <div class="row">
                    <div class="col-xl-8">
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
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">إجراء</a>
                                            <a class="dropdown-item" href="#">إجراء آخر</a>
                                            <a class="dropdown-item" href="#">شيء آخر هنا</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">العملاء</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>رقم الهوية</th>
                                            <th>الرقم المرجعي</th>
                                            <th>العداد</th>
                                            <th>الاداء الشهري</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 20; $i++)
                                            <tr>
                                                <td>
                                                    <a href="{{ url('/show') }}">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar{{ ($i % 5) + 1 }}.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar">
                                                    </a>
                                                </td>
                                                <td>عميل {{ $i }}</td>
                                                <td>{{ str_pad($i, 9, '0', STR_PAD_LEFT) }}</td>
                                                <td>{{ 10000 + $i }}</td>
                                                <td>{{ $i }}</td>
                                                <td><span class="badge bg-{{ ['success', 'warning', 'danger'][($i % 3)] }}"> {{ ['نشط', 'غير نشط', 'محذوف'][($i % 3)] }} </span></td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions float-right">
                                    <div class="dropdown show">

                                    </div>
                                </div>
                                <h5 class="card-title mb-0">معلومات العميل</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="64" height="64" class="rounded-circle mt-2" alt="Client Avatar">
                                    </div>
                                    <div class="col-sm-9 col-xl-12 col-xxl-9">
                                        <table class="table table-sm mt-2 mb-4">
                                            <tbody>
                                                <tr>
                                                    <th>الاسم</th>
                                                    <td>Angelica Ramos</td>
                                                </tr>
                                                <tr>
                                                    <th>رقم الهوية</th>
                                                    <td>123456789</td>
                                                </tr>
                                                <tr>
                                                    <th>الرقم المرجعي</th>
                                                    <td>12345</td>
                                                </tr>
                                                <tr>
                                                    <th>العداد</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th>الحالة</th>
                                                    <td><span class="badge bg-success">نشط</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <strong>Activity</strong>
                                <ul class="timeline mt-2 mb-0">
                                    <li class="timeline-item">

                                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                                    </li>
                                    <!-- Add more activities here -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
