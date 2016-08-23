@include('layout.head')
<style>
    body {
        background-color: #cff09e;
    }
</style>
<body>
        <!-- container section start -->
         <section id="container"> 
        @include('layout.side')
             <section id="main-content"> 
                <section class="wrapper">
                    <div style="min-height:750px;">
                        <h1 class="mytitle">@yield('pagename')</h1> 
                        @yield('content')
                    </div>
                </section>
            @include('layout.FRfooter')
            </section>
        </section>
    </div>
</body>

</html>