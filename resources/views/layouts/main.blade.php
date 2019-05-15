<!-- header -->
@include('inc.header')

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
         
            <!-- topnav-->
            @yield('topnav')

            <!-- content -->
            @yield('content')
            
             <!--footer -->
            @include('inc.footer')

         
        </div>
    </div>

    <!--scripts -->
    @include('inc.scripts')

</body>
</html>