    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="/" class="logo">系學會 <span class="lite">蜘人血統控制板</span></a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">
                                
                        </span>
                    </a>
                    <form id="logout" action="{{route('log.out')}}" class="dropdown-menu extended logout" method="post">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            {{csrf_field()}}
                            <a href="#" onclick="document.getElementById('logout').submit();"><i class="icon_lock-open"> 登出</i></a>
                        </li>
                    </form>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
        
        {{-- 關閉頁面時，留下登出紀錄 --}}
        <script>
            window.onbeforeunload = function(){
                documnet.getElementById('logout').submit();
            }
        </script>