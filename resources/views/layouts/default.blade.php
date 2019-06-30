<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


    <header class="header_area">
        @include('includes.header')
    </header>

    

            @yield('content')

   

    <footer class="footer_area clearfix">
        @include('includes.footer')
    </footer>

</body>
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</html>

