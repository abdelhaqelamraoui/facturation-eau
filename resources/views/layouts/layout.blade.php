<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
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
                    <a href="{{route('clients.index')}}" class="nav-link active" aria-current="page">
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
                        <button class="btn">{{ explode(' ', now())[0]}}</button>
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