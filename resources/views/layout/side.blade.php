    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
        </div>

        <!--logo start-->
        <a href="/" class="logo">系學會 <span class="lite">蜘人血統控制板</span></a>
        <!--logo end-->
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">          
                {{-- dropMenu --}}
                <li>
                    <a class="" href="{{route('forum')}}">
                        <span>討論區規則</span>
                    </a>
                </li>
                
                
                <li>
                    <a class="" href="{{route('member')}}">
                        <span>人員管理 </span>
                    </a>
                </li>        
                <li>
                    <a class="" href="{{route('loginfo')}}">
                        <span>Log</span>
                    </a>
                </li>
                
            </ul>
            
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    </div>