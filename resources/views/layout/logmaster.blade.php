@include('layout.LiH')
<style>
    body {
        background-color: #cff09e;
    }
    .jumbotron {
        background-color: #cff09e;
        text-align: center;
        margin-top: 18%;
    }
</style>
<body>
    <div id="wrapper">
        <!-- container section start -->
        <section id="container">
        <header class="header dark-bg">
        <!--logo start-->
            <a href="/" class="logo">實驗室 <span class="lite">蜘人血統控制板</span></a>
        <!--logo end-->
        </header>

                <section class="wrapper">
                    <div style="min-height:700px;">
                        <h1 class="mytitle">@yield('pagename')</h1>
                        @yield('content')
                    {{-- </div>  --}}
                </section>
            @if (!Auth::guest())
            @include('layout.LiF')
            @endif
        </section>
        @if (Auth::guest())
        @include('layout.LiF')
        @endif
    </div>
    <!-- container section start -->
</body>

</html>