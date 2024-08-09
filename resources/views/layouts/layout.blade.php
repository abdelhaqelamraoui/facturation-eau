<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.rtl.min.css') }}">
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

</head>

<body class="">
    <div class="row h-100 w-100">
        <!-- the sidebar -->
        <div id="sidebarMenu" class="col-2 d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <span class="fs-5 text-center w-100">{{ config('app.name') }}</span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto mt-4">
                <li class="nav-item">
                    <a href="/" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        الرئيسية
                    </a>
                </li> <a href="{{route('clients.index')}}" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                    الزبناء
                </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('factures.index')}}" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        الفواتير
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('releves.index')}}" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        الكشوفات
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('statistiques.index')}}" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        إحصائيات
                    </a>
                </li>
            </ul>
            <hr>
            <div class="ps-3">
            </div>
        </div>


        <div class="col px-0 d-flex flex-column">
            <!-- the header -->
            <header class="header navbar navbar-expand-lg bg-light border-bottom px-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">@yield('subtitle')</a>
                    <div>
                        <div>
                            <button class="btn ms-2">{{ explode(' ', now())[0]}}</button>
                            <a href="{{ url()->previous() }}" class="btn btn-primary me-2 px-4">رجوع</a>
                        </div>
                    </div>
                </div>
            </header>
            </nav>

            <!-- the main part -->
            <main class="col main p-4 flex-grow-1">
                @yield('content')
            </main>

        </div>

    </div>
</body>

</html>