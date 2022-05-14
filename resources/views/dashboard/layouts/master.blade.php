<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('metas')
    <title>dashboard @yield('title')</title>

    @include('dashboard.layouts.head')
</head>

<body>
    <!-- Whole Page Wrapper -->
    <div class="wrapper">
        @include('dashboard.layouts.navbar')

        @include('dashboard.layouts.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                @yield('title')
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('dashboard.layouts.footer')
        @include('dashboard.layouts.scripts')
        @include('dashboard.layouts.alerts')
        @stack('page-scripts')
    </div>
</body>

</html>
