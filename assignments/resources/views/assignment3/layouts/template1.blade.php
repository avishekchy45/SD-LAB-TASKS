<!DOCTYPE html>
<html lang="en">

<head>
    @include('assignment3.includes.head')
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('assignment3.includes.navbar')
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                @include('assignment3.includes.sidebar')
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('main')
                </div>
            </main>
            <footer class="py-4 bg-dark mt-auto">
                @include('assignment3.includes.footer')
            </footer>
        </div>
    </div>
    @include('assignment3.includes.scripts')
</body>

</html>