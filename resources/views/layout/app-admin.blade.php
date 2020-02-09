<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        @include('layout.partials.app-admin-header')
        @include('layout.partials.app-admin-sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                    <option selected> {{ now() }}</option>
    
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>

        </div>

    </div>


    <script src="{{ asset('adminmart/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('adminmart/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('adminmart/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminmart/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('adminmart/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('adminmart/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('adminmart/dist/js/custom.js') }}"></script>
</body>

</html>