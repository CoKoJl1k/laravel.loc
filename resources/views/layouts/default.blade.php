<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- main content -->
            <div id="content" class="col-md-8">
                @yield('content')
            </div>

    </div>



    <footer class="row">
        @section('footerAdd')
            <p><b>Section on main page</b></p>
        @show

          {{--  @yield('footerAdd') --}}


        @include('includes.footer')
    </footer>

</div>
</body>
</html>
