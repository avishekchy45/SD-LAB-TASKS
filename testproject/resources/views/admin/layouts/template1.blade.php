<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('admin.includes.navbar')
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                @include('admin.includes.sidebar')
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('main')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                @include('admin.includes.footer')
            </footer>
        </div>
    </div>
    @include('admin.includes.scripts')
</body>

</html>